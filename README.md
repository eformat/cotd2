
Cat/City of the Day

Items ordered by favourites decending based on rank.php settings

Interface: Swipe right for recording favourite - written as message to console.log Swipe left to scroll choices

A/B Use Case: Users record top preference using the application. Ater certain period, results in console.log are aggregrated. rank.php is edited to reflect results Change in rank.php triggers A/B deployment

V2 allows for unlimited list size and features simplified single page, item.php, view control, centralised user data configuration, and removal of images from css

Visit example at http://cotd-spicozzi.rhcloud.com/

# Running on Openshift3

    oc new-project cotd2 --display-name="City of the day" --description='City of the day'
    oc new-app openshift/php:5.6~https://github.com/<repo>/cotd2.git
    oc expose svc cotd2

# A/B Deployments

Deploy two versions of the application into your project

    oc new-app openshift/php:5.6~https://github.com/eformat/cotd2.git#master --name=master
    oc new-app openshift/php:5.6~https://github.com/eformat/cotd2.git#feature --name=feature

Create a route for the master service

    oc expose service master --hostname=cotd.apps.eformat.nz --name=cotd2

Change the H/A proxy to use round robin instead of leastconn strategy

    oc annotate route/cotd2 haproxy.router.openshift.io/balance=roundrobin

Play around with weighting to each version

    oc set route-backends routes/cotd2 master=100 feature=0
    oc set route-backends routes/cotd2 master=0 feature=100
    oc set route-backends routes/cotd2 master=50 feature=50
    oc set route-backends routes/cotd2 --adjust feature=+10%

# Developing on the fly in Openshift3

Edit the buildconfig:

    -- change from Git to binary
    source:
      type: Git
      git:
        uri: 'https://github.com/eformat/cotd2.git'
      secrets: null

    -- to this
    source:
      type: Binary

    -- then build with
    oc start-build --from-dir=. cotd2

You may also wish to enable live reload for php image (don't do this in prod)

    oc set env dc/cotd2 OPCACHE_REVALIDATE_FREQ=0

# Parse the pods running statistics

For now:

    ./parseCotdLogs.pl $(oc get pods | grep cotd | grep Running | awk '{print $1}')
