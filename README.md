# Newcactle Tech Totem Wordpress 

Please note: This repo holds the wordpress multisite distribution. For details on the totem's hardware infrastructure go to https://github.com/FutureCitiesCatapult/newcastle_totem_backend


## Technical overview
### Software system
The TechTotem system is built using WordPress multisite. Multisite installs consist of one core WordPress installation with multiple sites running off that core. Themes, plugins and users can be managed centrally. With this setup, each TechTotem has its own site, with a centrally-managed theme and plugins.

### Updates and security
Like all software systems, WordPress and its plugins should be kept up-to-date. Doing so patches security vulnerabilities and ensures you are running the most stable version. The longer an install is left without updating the more insecure it becomes and the harder it becomes to upgrade later. Ideally, the installation should be updated weekly or monthly.

### Further reading
Further information about WordPress and WordPress multisite can be found at https://wordpress.org/ and https://codex.wordpress.org/Before_You_Create_A_Network.


## Users and user access
### Access levels

1.	Super admin - Power users who have access to the entire system: every site, user, theme and plugin. Only existing super admin users can create/delete other super admin users.
2.	Admin - Users who have complete management control over a specific site.
3.	Editor - Users who can add/edit/delete content in a specific site.

### Logging in [all users]
1.	Go to http://35.176.15.249 (Note that this is a temporary domain hosted at FCCs infrastructure. It should be changed to the deployer's infrastructure)
2.	Login using your username and password

### Adding a new user [super admin]
1.	Go to the top toolbar and click on My Sites > Network Admin > Users
2.	Click the Add New button
3.	Type in a username
4.	Type/paste in the user’s email address
5.	Click the Add User button
6.	In the left hand sidebar click on Users > All Users
7.	Click on the user you have just created
8.	Fill in the rest of the form fields as required
9.	Scroll to the bottom of the page
10.	Click on the Update User button


### Editing an existing user [super admin]
1.	Go to the top toolbar and click on My Sites > Network Admin > Users
2.	Click on the user you would like to edit
3.	Edit the form fields as required
4.	Scroll to the bottom of the page
5.	Click on the Update User button


### Deleting an existing user [super admin]
1.	Go to the top toolbar and click on My Sites > Network Admin > Users
2.	Mouseover the user you would like to delete
3.	Click on the Delete link


### Giving a user access to a site [super admin]
1.	Go to the top toolbar and click on My Sites > Network Admin > Sites
2.	Mouseover the site you would like to edit
3.	Click on the Edit link
4.	Click on the Users tab
5.	Scroll to the section titled Add Existing User
6.	Type in the user’s username
7.	Choose the role you would like them to have
8.	Click the Add User button


 

## Sites

### Creating a new site [super admin]

1.	Go to the top toolbar and click on My Sites > Network Admin > Dashboard
2.	In the left hand sidebar click on NS Cloner V3
3.	Scroll to the Select Source section
4.	Choose 1 - Master template from the drop-down menu
5.	Scroll to the Create New Site section
6.	Fill in the site title using the location of the TechTotem
7.	Fill in the site url
8.	Leave all other settings as-is
9.	Click on the Clone button at the bottom right of the page
10.	Setup the JSON files

a.	Go to the top toolbar and click on My Sites > Network Admin > Sites
b.	Locate the site you are setting up in the list of sites
c.	Make a note of the site ID number which you can find in the corresponding column
d.	Create a JSON file called sensors-totem-X, where X corresponds to the ID number of the site you have created
e.	Create a JSON file called recommendation-totem-X, where X corresponds to the ID number of the site you have created
f.	Upload those 2 files to https://s3-eu-west-2.amazonaws.com/newcastle.tech.totem


### Configuring a new site [admin]
1.	Go to the top toolbar and click on My Sites > Network Admin > Sites
2.	Mouseover the site you would like to edit
3.	Click on the Edit link
4.	Go to the left hand sidebar and click on Totem Partner
5.	Fill in the Branding section - This section defines the logos, colours and name of the organisation responsible for this TechTotem
6.	Fill in the Banner/Teaser section

This section defines the row at the bottom of the home screen and has two options:
a.	Simple content can be used for any combination of content and/or photo. It’s flexible but should only be used for static content which does change very often and where the content and images are located on the TechTotem
b.	Complex content should be used when the content to be displayed needs some code to make it work. In such a case, you should use the PHP Snippets section (see below) 
7.	Fill in the Custom Page/Slide section
This section defines the content of the sponsor page in the screensaver and on their custom page of the TechTotem. It has two options:
a.	Simple content can be used for any combination of content and/or photo. It’s flexible but should only be used for static content which does change very often and where the content and images are located on the TechTotem
b.	Complex content should be used when the content to be displayed needs some code to make it work. In such a case, you should use the PHP Snippets section (see below) 
8.	Scroll to the top of the page and click on the Publish button in the top right hand corner


### Creating PHP Snippets [admin]
PHP Snippets are useful when the TechTotem partner’s content is complex and needs to be dynamically generated from a 3rd-party service or it needs some special code. To create a PHP Snippet please do the following:

1.	Go to the top toolbar and click on My Sites > Network Admin > Sites
2.	Mouseover the site you would like to edit
3.	Click on the Edit link
4.	In the left hand sidebar click on PHP snippets
5.	Click on the Add snippet button
6.	Paste your code into the field labelled Enter the code for your snippet
7.	Click on the option for Where there is a shortcode
8.	Give the snippet a description so you know what it is for
9.	Scroll to the top of the page and click the Publish button in the top right hand corner


### Using PHP Snippets [admin]
1.	Go to the top toolbar and click on My Sites > Network Admin > Sites
2.	Mouseover the site you would like to edit
3.	Click on the Edit link
4.	In the left hand sidebar click on PHP snippets
5.	Locate the snippet you would like to use
6.	Find the shortcode which looks something like [wbcr_php_snippet id="80"]
7.	Make a note of the ID number (In our example above this ID number is 80)
8.	Go to the left hand sidebar and click on Totem Partner
9.	Scroll down to the section where you would like to use this snippet and click on the Complex content option
10.	Type the PHP snippet’s ID number into the corresponding box
11.	Scroll to the top of the page and click the Update button in the top right hand corner
