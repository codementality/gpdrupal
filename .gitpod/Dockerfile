FROM gitpod/workspace-full
SHELL ["/bin/bash", "-c"]

# COPY .gitpod/docker/composer-installer.sh /usr/lib/composer-installer.sh

RUN sudo apt-get -qq update \
  ## install DDEV
  && brew update && brew install drud/ddev/ddev \
  ## Install composer
  && export EXPECTED_CHECKSUM="$(php -r 'copy("https://composer.github.io/installer.sig", "php://stdout");')" \
  && php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" \
  && export ACTUAL_CHECKSUM="$(php -r "echo hash_file('sha384', 'composer-setup.php');")" \
  && /bin/bash -c "if [[ \"$EXPECTED_CHECKSUM\" != \"$ACTUAL_CHECKSUM\" ]]; then rm composer-setup.php; exit 1; fi" \
  && php composer-setup.php --quiet \
  && mv composer.phar /usr/local/bin/composer \
  && rm composer-setup.php
