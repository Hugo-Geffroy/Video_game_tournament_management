$TTL    604800
@       IN      SOA     ns1.gestionTournament.com. admin.gestionTournament.com. (
                              3         ; Serial
                         604800         ; Refresh
                          86400         ; Retry
                        2419200         ; Expire
                         604800 )       ; Negative Cache TTL
;
@       IN      NS      ns1.gestionTournament.com.

ns1     IN      A       172.25.192.57
web     IN      A       172.25.192.57
mysql   IN      A       172.25.192.57
php     IN      A       172.25.192.57

