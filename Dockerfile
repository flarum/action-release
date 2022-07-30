ARG GITHUB_TOKEN=${GITHUB_TOKEN}
ARG OPEN_COLLECTIVE_TOKEN=${OPEN_COLLECTIVE_TOKEN}
ARG NEXT_TAG=${NEXT_TAG}

FROM quay.io/islamic-network/php:8.1-cli

ENV GITHUB_TOKEN=${GITHUB_TOKEN}
ENV OPEN_COLLECTIVE_TOKEN=${OPEN_COLLECTIVE_TOKEN}
ENV NEXT_TAG=${NEXT_TAG}

RUN mkdir /var/build

COPY . /var/build/

WORKDIR /var/build

RUN composer install --no-dev --prefer-dist -a -n --no-progress
RUN chmod +x bin/release

CMD ["php", "/var/build/bin/release", "gather-release"]