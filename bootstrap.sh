#! /usr/bin/env bash

# Update repos
apt-get update

# Install apache
apt-get install -y apache2
if ! [ -L /var/www ]; then
  rm -rf /var/www
  ln -fs /vagrant /var/www
fi

# Enable mod_rewrite in apache
a2enmod rewrite

# Install PHP5
apt-get install -y php5
apt-get install -y php5-cli
apt-get install -y libapache2-mod-php5

# Install mcrypt for PHP5
apt-get install -y php5-mcrypt
php5enmod mcrypt

# Install cURL
apt-get install -y php5-curl

# Install composer
curl -sS https://getcomposer.org/installer | php
mv composer.phar /usr/local/bin/composer

# Open firewall
ufw allow 8888

# Restart apache
/etc/init.d/apache2 restart