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
