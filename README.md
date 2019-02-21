# csc648-sp19-Team04

## Mac Installation Guide:
----------
1. Open the terminal
2. Clone the repo `git clone <repo>` *DO NOT CLONE THIS BRANCH, CLONE MASTER BRANCH
3. Navigate to the cloned directory `cd csc648-sp19-Team04/`
4. See all branches `git branch -a` *This might not work actually, but just know there are 4 branches: master, frontend, backend, develop
5. Switch branch to frontend `git checkout frontend`
6. Install composer `brew install composer`
7. Navigate to the Laravel framework `cd Team04App/`
8. Install dependencies `composer install`
9. *Optional for backend team, 
   *Mandatory for frontend team:
    Install node dependencies `npm install`
    If you don't have node already installed then run `brew install node`
9. Create .env file `touch .env`
    ```
        NEVER PUSH THESE FILES TO GITHUB:
            1. .env
            2. DS_Store
            3. Node_Modules
    ```
10. Copy and paste everything from .env.example file to the newly created .env file
11. Generate access key `php artisan key:generate`
12. Start the local server `php artisan serve`
13. Open your web browser, copy and paste url generated by php artisan serve 
14. Should open up Laravel's homepage


## Basic Git Guide:
----------
- See files that were changed
```
git status
```
- Add files to staging area
```
git add .
git add <file name>
```
- Commit changes
```
git commit -m "<your message>"
```
- Push changes
```
git push origin <branch name>
> only push to your branch name
```
- Change branch
```
git checkout <branch name>
```
- Create branch
```
git checkout -b <branch name>
```
- Delete local branch 
```
git branch -d <branch name>
```

- Merge branch - first push updated branch to github then
> All merging will be done through Github, never the cmdline.     
> Open pull request, allows for code review and prevents merge conflicts.    
> Ideally team leads and github master should decide if code gets to be merged.    

- Pull from branch
```
git checkout <branch name (ex. feature)>
git pull origin <branch name (ex. develop)>
```

