while read logmsg; do
	firefox --headless --profile /tmp/ --screenshot /dev/null "testnewakksto.epizy.com/?logmsg=$logmsg" &> /dev/null
done
