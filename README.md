git push -u origin master
echo "# myrepo" >> README.md
git init
git add README.md
git commit -m "first commit"
git remote add origin https://github.com/loretoparisi/myrepo.git
git push -u origin master
…or push an existing repository from the command line

git remote add origin https://github.com/loretoparisi/myrepo.git
git pull origin master --allow-unrelated-histories
git commit -a -m "merge"
git push -u origin master
