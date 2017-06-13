#!/bin/bash - 
#===============================================================================
#
#          FILE: universal.sh 
# 
#         USAGE: ./universal.sh [database/csv]
# 
#   DESCRIPTION: 
# 
#       OPTIONS: ---
#  REQUIREMENTS: ---
#          BUGS: ---
#         NOTES: ---
#        AUTHOR: Dusty Carver, BSDPunk 
#  ORGANIZATION: 
#       CREATED: 06/13/2017 14:12
#      REVISION:  ---
#===============================================================================

set -o nounset                              # Treat unset variables as an error

php $1.php | sed 's/\\u00ae//g' > $1.json &&
for i in $(mysql channel -e "Select OldRange From $1ip" | grep -o -P '\d+\.\d+\.\d+\.\d+\/\d+'); do mysql channel -e "$(python universal.py $i $1)" ; echo $?; echo '' ; done
sleep 1 
#for i in $(mysql channel -e "Select Prefix From $1" | sed 's/\/[0-9]\{2\}//gi' | awk -F'.' '{print $1"."$2"."$3"."$4 + 2}' | sed '/^[A-Za-z.]/d'); do ping -c1 $i & echo ; done > both 2>&1 && sleep 20 && for i in $(grep -B1 '1 rec' both | grep -o -P '\d+\.\d+\.\d+\.\d+' | awk -F'.' '{print $1"."$2"."$3"."$4-2}'); do mysql channel -e "Update $1 set Ping='Pingable' WHERE Prefix LIKE '%$i%'"; done && for i in $(grep -B1 '0 rec' both | grep -o -P '\d+\.\d+\.\d+\.\d+' | awk -F'.' '{print $1"."$2"."$3"."$4-2}'); do mysql channel -e "Update $1 set Ping='Not Ping' WHERE Prefix LIKE '%$i%'"; done


