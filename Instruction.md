#Instructions for collaborators
## Git Related
A branch with name **devel** has been created.
So after creating changes or adding a file use these commands<br>
`$ git pull origin devel`<br>
`$ git add .`<br>
`$ git commit -m "your message"`<br>
`$ git push origin devel`<br>

## Database 
In phpmyadmin page of your localhost to import the database<br>
1. Create a database named as 'jmicart' and select it.<br>
2. Click on Import tab<br>
3. Choose **CreateDatabase.sql** file<br>
4. Leave all the options as it is and click on Go<br>
5. Before using the project modify the connect.php as per your password and hostname.
