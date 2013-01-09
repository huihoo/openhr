#!/bin/bash
# this file can be used for developer on linux.
sudo chgrp -R www-data lib/confs
sudo chgrp -R www-data lib/logs
sudo chgrp -R www-data symfony/config
sudo chgrp -R www-data symfony/apps
sudo chgrp -R www-data symfony/cache
sudo chgrp -R www-data symfony/log
sudo chgrp -R www-data installer 
sudo chmod -R g+w installer 
sudo chmod -R g+w lib/confs
sudo chmod -R g+w lib/logs
sudo chmod -R g+w symfony/config
sudo chmod -R g+w symfony/apps
sudo chmod -R g+w symfony/cache
sudo chmod -R g+w symfony/log
