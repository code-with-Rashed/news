# NEWS APPLICATION

The NEWS APPLICATION is a dynamic news portal site.

## Installation Proccess
[Download the Project](https://github.com/code-with-Rashed/news/archive/refs/heads/master.zip)  

### Command line instruction 

- Insure composer is installed in your computer.

- To open the terminal in your project directory.  
then run this commands.

### install required packages

```
composer install
```

### Create .env file  

```
cp .env.example .env
```

### Create application key  

```
php artisan key:generate
```

### Set Environment Variables  
- To open the .env file.  
- You have to fill your database credentials.  
For Example...  

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=
DB_USERNAME=root
DB_PASSWORD=
```

### Migrate Database  

```
php artisan migrate:fresh
php artisan db:seed
```
### Run Application  

```
php artisan serve
```

### Admin panel (dummy) credentials
- Hit this link http://yourhostname/admin/login

| Role         | Email              | Password |
|--------------|--------------------|----------|
| admin        | admin@news.com     | 12345    |
| moderator    | moderator@news.com | 12345    |
| writer       | writer@news.com    | 12345    |


### Required / key Features
![key-features](./preview/sitemap/sitemap.png)

### erdiagram live link
<iframe width="100%" height="500px" style="box-shadow: 0 2px 8px 0 rgba(63,69,81,0.16); border-radius:15px;" allowtransparency="true" allowfullscreen="true" scrolling="no" title="Embedded DrawSQL IFrame" frameborder="0" src="https://drawsql.app/teams/rashed-3/diagrams/news/embed"></iframe>

### database diagram (png format)
![schema-diagram](./preview/diagram/schema-diagram.png)

### Preview for visitor panel
![home-page](./preview/showcase/visitorpanel/home-page.jpeg) <br><hr><br>
![read-news-page](./preview/showcase/visitorpanel/read-news.jpeg) <br><hr><br>
![category-page](./preview/showcase/visitorpanel/category-page.jpeg) <br><hr><br>
![contact-page](./preview/showcase/visitorpanel/contact-page.jpeg)

### Preview for user panel
![dashboard](./preview/showcase/userpanel/dashboard-page.jpeg) <br><hr><br>
![news-feed-page](./preview/showcase/userpanel/news-feed-page.jpeg) <br><hr><br>
![bookmark-news-page](./preview/showcase/userpanel/bookmark-news-page.jpeg) <br><hr><br>
![liked-news-page](./preview/showcase/userpanel/liked-news-page.jpeg) <br><hr><br>
![disliked-news-page](./preview/showcase/userpanel/disliked-news-page.jpeg) <br><hr><br>
![interested-category-page](./preview/showcase/userpanel/interested-category-page.jpeg) <br><hr><br>
![user-profile-page](./preview/showcase/userpanel/user-profile-page.jpeg)

### Preview for admin panel
![dashboard](./preview/showcase/adminpanel/dashboard-page.jpeg) <br><hr><br>
![category-management](./preview/showcase/adminpanel/category-management-page.jpeg) <br><hr><br>
![news-management](./preview/showcase/adminpanel/news-management-page.jpeg) <br><hr><br>
![message-management](./preview/showcase/adminpanel/message-management-page.jpeg) <br><hr><br>
![writer-management](./preview/showcase/adminpanel/writer-management-page.jpeg) <br><hr><br>
![settings-management](./preview/showcase/adminpanel/settings-management-page.jpeg) <br><hr><br>
![address-management](./preview/showcase/adminpanel/address-management-page.jpeg) <br><hr><br>
![profile-management](./preview/showcase/adminpanel/profile-management-page.jpeg) <br><hr><br>
