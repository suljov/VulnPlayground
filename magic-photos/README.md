## How to install

```
cd VulnPlayground 
cd magic-photos
docker build -t magic-photos .
sudo docker run -d -p 80:80 --name magic-photos magic-photos
```

You will reach the website by going to `http://127.0.0.1`
