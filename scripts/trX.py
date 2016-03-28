def trX(n):
    x = str(n)
    print ".tr"+x+"{display: inline-block;"+"-webkit-transform: translateZ("+x+"px);"+"-moz-transform: translateZ("+x+"px);"+"-ms-transform: translateZ("+x+"px);"+"-o-transform: translateZ("+x+"px);"+"transform: translateZ("+x+"px);"+"}"+"\n.tr"+x+"m{display: inline-block;"+"-webkit-transform: translateZ(-"+x+"px);"+"-moz-transform: translateZ(-"+x+"px);"+"-ms-transform: translateZ(-"+x+"px);"+"-o-transform: translateZ(-"+x+"px);"+"transform: translateZ(-"+x+"px);"+"}"
for n in range(1,101):
    trX(n)