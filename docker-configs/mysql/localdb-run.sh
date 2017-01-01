#!/bin/bash
set -e # fail on any error

echo '* Working around permission errors locally by making sure that "mysql" uses the same uid and gid as the host volume'
TARGET_UID=$(stat -c "%u" /var/lib/mysql)

echo '-- Setting mysql user to use uid '$TARGET_UID
usermod -o -u $TARGET_UID mysql || true
TARGET_GID=$(stat -c "%g" /var/lib/mysql)

echo '-- Setting mysql group to use gid '$TARGET_GID
groupmod -o -g $TARGET_GID mysql || true

if [ ! -d "/var/lib/mysql/mysql" ]; then
  echo '-- Installing initial database '
  mysql_install_db --basedir=/usr/local/mysql --datadir=/var/lib/mysql --user=mysql
fi

echo
echo '* Starting MySQL'
/entrypoint.sh mysqld --user=mysql --console
