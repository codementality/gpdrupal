FROM gitpod/workspace-full
SHELL ["/bin/bash", "-c"]

# COPY .gitpod/docker/composer-installer.sh /usr/lib/composer-installer.sh

RUN sudo apt-get -qq update \
  ## install DDEV
  && brew update && brew install drud/ddev/ddev \
  ## Install composer
  && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && php composer-setup.php --quiet \
  && rm composer-setup.php
