
if [  $1!='' ]
then
   msg=$1;
else
   msg='bug';
fi
 
git add .
git commit -m '$msg'  
git push origin hexj  
git checkout dev
git pull  
git merge hexj 
git push
git checkout master
git merge dev
git pull
git push
git checkout hexj
git rebase dev
git push origin hexj