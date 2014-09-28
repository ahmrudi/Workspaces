from fabric.api import run,local

def host_type():
    run('uname -s')

def prepare_deploy():
    local("python3 manage.py test lists")
    local("git add . && git commit -am 'test fabric'")
    local("git push origin master")
