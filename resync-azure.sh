#!/bin/bash

sshhostname="siwawesw@207.46.229.53"
# sshhostname="myproject"


# If this is first time then add ssh config
ssh -q $sshhostname quit
#if [ $? -eq 255 ]
#then
#	echo "\n\n" >> ~/.ssh/config
#	vagrant ssh-config --host $sshhostname | grep -v "fog" >> ~/.ssh/config
#fi

# Sync files
#rsync --verbose --delete --archive -z --exclude .vagrant/ --exclude vendor --exclude app/storage --exclude storage/app --exclude .svn --exclude .env --exclude public/res -e ssh evybook-service/ $sshhostname:/var/www/html/evybook-service/
rsync --verbose --delete --archive -z --exclude .DS_Store -a -e "ssh" --rsync-path="sudo rsync" evybook-service/ $sshhostname:/var/www/html/evybook-service/

# Run composer install
# ssh $sshhostname "sudo chmod -R 777 /var/www/app/storage ; cd /var/www ; sudo composer install"
# ssh $sshhostname "sudo chmod -R 777 /var/www/storage ; cd /var/www ; sudo composer install"
