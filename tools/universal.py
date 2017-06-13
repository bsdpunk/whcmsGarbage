#!/usr/bin/python
import json
from pprint import pprint
import ipaddress
from netaddr import IPNetwork, IPAddress
import sys
import socket
import re
pattern = re.compile("(patternhere).*")
#if IPAddress("192.168.0.1") in IPNetwork("192.168.0.0/24"):
#print sys.argv
company = sys.argv[2]

with open('universal.json') as data_file:
        data = json.load(data_file)

#        pprint(data)

#print(data['products']['product'][0]['dedicatedip'])
for key in data['products']['product']:
    #print key['dedicatedip']
#    if key['dedicatedip'] == '' : 
#       key['dedicatedip'] = '1.1.1.1'

    if pattern.match(key['dedicatedip']):
       key['dedicatedip'] = '1.1.1.1'
#    try:
#       IPAddress(key['dedicatedip'])
#    except netaddr.AddrFormatError:
#        continue
    try:
       socket.inet_aton(key['dedicatedip'])
    except socket.error:
        continue
    print(key['dedicatedip'])
    if IPAddress(key['dedicatedip']) in IPNetwork(str(sys.argv[1])):
        print("UPDATE "+company+"ip set MainIP='"+ key['domain'] +"', MID='" + key['id'] +"', Password='"+key['password']+"', CPID='"+ key['id'] +"', Status='"+ key['status'] +", VMName="+ key[''][''] +",' WHERE OldRange='"+ sys.argv[1] +"'")
#    print key['groupname']
        #print "Yay!"
    # legal
 
