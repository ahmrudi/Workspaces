import paramiko

cmd='ls /home/winsho01'
user='winsho01'
passw='siedoer91'
host='wins-hotel.com'
port=22

ssh=paramiko.SSHClient()

ssh.set_missing_host_key_policy(paramiko.AutoAddPolicy())
ssh.connect(host,username=user,password=passw)
stdin,stdout,stderr=ssh.exec_command(cmd)
print stdout.readlines()
ssh.close()
