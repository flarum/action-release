FROM quay.io/islamic-network/php:8.1-cli

ENV INPUT_GITHUB_TOKEN
ENV INPUT_OPEN_COLLECTIVE_TOKEN
ENV INPUT_NEXT_TAG

RUN mkdir /var/build

COPY . /var/build/

WORKDIR /var/build

RUN composer install --no-dev --prefer-dist -a -n --no-progress
RUN chmod +x bin/release

ENTRYPOINT ["php", "/var/build/bin/release", "gather-release"]
