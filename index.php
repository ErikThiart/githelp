<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Git Cheatsheet | Git Reference | PRKonsult.co.za</title>
    <link rel='shortcut icon' type='image/x-icon' href='/favicon.ico' />
    <!-- Stylesheet -->
    <link href="css.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-74433803-9', 'auto');
      ga('send', 'pageview');

    </script>
  </head>

<body>
<div class="container">
<!-- github-ribbon -->
<a href="https://github.com/ErikThiart/githelp" target="_blank" class="github-corner"><svg width="80" height="80" viewBox="0 0 250 250" style="fill:skyblue; color:#353a43; position: absolute; top: 0; border: 0; right: 0;"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" style="transform-origin: 130px 106px;" class="octo-arm"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a><style>.github-corner:hover .octo-arm{animation:octocat-wave 560ms ease-in-out}@keyframes octocat-wave{0%,100%{transform:rotate(0)}20%,60%{transform:rotate(-25deg)}40%,80%{transform:rotate(10deg)}}@media (max-width:500px){.github-corner:hover .octo-arm{animation:none}.github-corner .octo-arm{animation:octocat-wave 560ms ease-in-out}}</style>
<!-- //github-ribbon -->
<header>
  <h1>Git Cheatsheet</h1>
  <h4 class="ref">Powered by <a href="https://www.domains.co.za/aff.php?aff=1868" target="_blank">Domains.co.za</a></h4>
</header>
<p class="note">Note: Items contained in [] are optional. All caps words should be replaced, except HEAD.</p>
<h2>Basics</h2>
<ul class="sheet">
  <li>
    <h3>Just installed Git?</h3>
    <pre class="prettyprint lang-git">
git config --global user.name "Your Name"
git config --global user.email "your@email.com"
git config --global color.ui true
git config --global core.autocrlf true</pre>
  </li>
  <li>
    <h3>Create</h3>
    <pre class="prettyprint lang-git"># From existing data
git init
git add .
git commit -m "Initial commit."
# From existing repo
git clone ~/existing ~/new
git clone https://USER@HOST.COM/PROJECT.git</pre>
  </li>
  <li>
    <h3>Browse</h3>
    <pre class="prettyprint lang-git"># View changed files
git status
# View changes
git diff [ID:FILE]
# View changes between commits
git diff ID1 ID2
# View History
git log
# Who did this?
git blame FILE
# View changes between branches
git diff branch1..branch2
# View changed files between branches
git diff --name-status branch1..branch2</pre>
  </li>
  <li>
    <h3>Update</h3>
    <pre class="prettyprint lang-git">git fetch [REMOTE BRANCH]
# Fetch and merge
git pull [REMOTE BRANCH]</pre>
  </li>
  <li>
    <h3>Local work</h3>
    <pre class="prettyprint lang-git"># Add all changes to stage
git add .
# Commit all tracked files
git commit -a [-m "Initial commit."]
# Commit staged changes
git commit
# Unstage file
git reset FILE</pre>
  </li>
  <li>
    <h3>Branch</h3>
    <pre class="prettyprint lang-git"># View branches
git branch
# Switch between branches
git checkout BRANCH
# Merge branches
git checkout BRANCH2
# Delete local branch
git branch -d BRANCH
# Delete without merging
git branch -D BRANCH
# Delete remote branch
git push REMOTE --delete BRANCH
# Fetch remote branch to local
git pull REMOTE REMOTE_BRANCH:LOCAL_BRANCH</pre>
  </li>
  <li>
    <h3>Stash</h3>
    <pre class="prettyprint lang-git"># Save a stash
git stash
# View stashes
git stash list
# Apply stash
git stash apply [STASH1]
# Apply and remove
git stash pop
# Clear all stashes
git stash clear</pre>
  </li>
  <li>
    <h3>Reset</h3>
    <pre class="prettyprint lang-git"># Revert to last commit
git reset --hard HEAD^
# Undo last commit
git reset --soft HEAD^
# Reset file
git checkout -- FILE</pre>
  </li>
  <li>
    <h3>Publish</h3>
    <pre class="prettyprint lang-git"># Push changes to another repo
git push [REMOTE BRANCH]
# Make a version or milestone
git tag NAME
</pre>
  </li>
  <li>
    <h3>Maintenance</h3>
    <pre class="prettyprint lang-git"># Remove untracked files and directories
git clean -fd
# Check for errors
git fsck
# Purge remote repositories that no longer exists 
git fetch -p
</pre>
  </li>
  <li>
    <h3>Aliases</h3>
    <pre class="prettyprint lang-git"># Config format
git config --global alias.co "checkout"

co "checkout"
st "status -sb"
ls "log --pretty=format:'%h: %s'"
df "diff"
ci "commit"
      
# Usage
git co branch</pre>
  </li>
  <li>
    <h3>Archive</h3>
    <pre class="prettyprint lang-git"># Archive into a zip file
git archive --format zip --output /full/path/file.zip BRANCH</pre>
  </li>
</ul>
<h2>Advanced</h2>
<ul class="sheet">
  <li>
    <h3>Amend commit</h3>
    <pre class="prettyprint lang-git">git commit -m "Initial commit."
git add FILE
git commit --amend</pre>
  </li>
  <li>
    <h3>Push to a different remote branch</h3>
    <pre class="prettyprint lang-git">git push REMOTE LOCAL_BRANCH:REMOTE_BRANCH</pre>
  </li>
  <li>
    <h3>Access new remote branch</h3>
    <pre class="prettyprint lang-git">git fetch REMOTE REMOTE_BRANCH:LOCAL_BRANCH
git checkout LOCAL_BRANCH</pre>
  </li>
  <li>
    <h3>Set upstream</h3>
    <pre class="prettyprint lang-git">git branch --set-upstream BRANCH REMOTE/REMOTE_BRANCH</pre>
  </li>
  <li>
    <h3>Rebase</h3>
    <pre class="prettyprint lang-git">
# Rebase
git pull --rebase
# Rebase and purge
git pull --rebase -p
    </pre>
  </li>
  <li>
    <h3>Files</h3>
    <pre class="prettyprint lang-git"># Untrack file without removing
git rm --cached FILE
# Untrack folder without removing
git rm -r --cached FOLDER/.
</pre>
  </li>
  <li>
    <h3>Changes</h3>
    <pre class="prettyprint lang-git"># Ignore file mode changes
git config core.fileMode false
</pre>
  </li>
  <li>
    <h3>Force Overwrite of Local Files</h3>
    <pre class="prettyprint lang-git">git fetch --all
git reset --hard REMOTE/BRANCH
</pre>
  </li>
</ul>
</div>
</body>

    <!-- jQuery  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js.js"></script>
  </body>
</html>
