i#!/bin/sh
    echo "Content-type: text/html\n"

    # read in our parameters
    CMD=echo "$QUERY_STRING" | sed -n 's/^.cmd=([^&]).$/\1/p' | sed "s/%20/ /g"
    FOLDER=echo "$QUERY_STRING" | sed -n 's/^.folder=([^&]).$/\1/p' | sed "s/%20/ /g"| sed "s/%2F///g"
     FOLDER1=echo "$QUERY_STRING" | sed -n 's/^.folder1=([^&]).$/\1/p' | sed "s/%20/ /g"| sed "s/%2F///g"
FOLDER2=echo "$QUERY_STRING" | sed -n 's/^.folder2=([^&]).$/\1/p' | sed "s/%20/ /g"| sed "s/%2F///g"

    # our html header
    echo "<html>"
    echo "<head><title>Bash CGI</title></head>"
    echo "<body>"

    # test if any parameters were passed
    if [ $CMD ]
    then
      case "$CMD" in
        ifconfig)
          echo "Output of ifconfig :<pre>"
          /sbin/ifconfig
          echo "</pre>"
          ;;

        uname)
          echo "Output of uname -a :<pre>"
          /bin/uname -a
          echo "</pre>"
          ;;

        dmesg)
          echo "Output of dmesg :<pre>"
          /bin/dmesg
          echo "</pre>"
          ;;

    df)
          echo "Output of df -h :<pre>"
          /bin/df -h
          echo "</pre>"
          ;;

    free)
          echo "Output of free :<pre>"
          /usr/bin/free
          echo "</pre>"
          ;;