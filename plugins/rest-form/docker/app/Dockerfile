FROM andreaschiona/grav-dokerized:latest

MAINTAINER Andrea Schiona <andrea.schiona@gmail.com>

RUN apt-get update && apt-get install -y unzip

RUN cd user/plugins && curl -LOk https://github.com/andreaschiona/grav-plugin-rest-form/archive/master.zip && unzip master.zip && rm master.zip && mv grav-plugin-rest-form-master rest-form