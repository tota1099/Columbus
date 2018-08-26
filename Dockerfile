FROM amazonlinux:1

RUN yum update -y
RUN yum install -y httpd24 httpd24-devel
RUN yum install -y php70 php70-devel php70-fpm php70-mbstring php70-mcrypt php70-mysqlnd php70-soap php70-xml php70-xmlrpc php70-pecl-ssh2.x86_64
RUN yum install -y gcc gcc-c++ make

RUN yum install -y php7-pear
RUN yum install -y php70-gd php70-mysqlnd php70-fpm php70-pecl-apcu php7-pear php70-devel
RUN yum install -y php70-soap

WORKDIR /var/www/html
ENV HOME /var/www/html
ENV TZ=America/Sao_Paulo
RUN ln -snf /usr/share/zoneinfo/$TZ /etc/localtime && echo $TZ > /etc/timezone

EXPOSE 80
EXPOSE 443
EXPOSE 3306

ENTRYPOINT ["/usr/sbin/httpd", "-D", "FOREGROUND"]