
if [  $1!='' ]
then
   msg=$1;
else
   msg='bug';
fi
 
git add .
git commit -m '$msg'  
git push origin master  