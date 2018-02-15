# wp-dominique

Every developer changing configurations or content in WP-ADMIN which affects the wordpress local file system (storage) needs to push them to the git repository in order to not loose this changes. This can be done by syncronizing the local working copy of the git repository and commit / push the changes afterwards.

oc rsync --exclude=.git/ wordpress-mysql-37-<pod-id>:/opt/app-root/src/ /<path>/<to>/<local>/<git-working-copy>/