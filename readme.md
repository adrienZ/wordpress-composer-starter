# installation

```
mkdir my-site
cd my-site
curl -L -o master.zip https://github.com/adrienZ/wordpress-composer-starter/archive/master.zip && unzip master.zip && rm master.zip && mv ./wordpress-composer-starter-master/{.,}* ./ && rm -r ./wordpress-composer-starter-master
```

1. run `composer install`
2. At the root of your project, copy  the `.env.sample` file as `.env` and connect to your database.
