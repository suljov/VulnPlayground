# Hackable-website
A simple and portable hackable website in a docker for a very easy beginner CTF box or for hacking demo purposes


## How to install

```
git clone https://github.com/suljov/Hackable-website
cd Hackable-website
docker build -t my-custom-image .
docker run --rm -itd -v "$PWD/data:/data" -p 80:80 my-custom-image
```

You will reach the website by going to `http://127.0.0.1`
