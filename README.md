
![](https://github.com/suljov/Hackable-website/blob/main/eye.jpg)

### Can you see the way of the exploit?

# Hackable-website


A simple and portable hackable websites in a docker for a very easy beginner CTF box or for hacking demo purposes

A versatile collection of hackable environments hosted in Docker containers, designed for beginner to intermediate CTF challenges and hands-on hacking demos. This project offers an array of vulnerable setups, each highlighting different types of exploits, making it an ideal playground for security enthusiasts to practice and learn.


## How to install

```
git clone https://github.com/suljov/Hackable-website
cd Hackable-website
docker build -t hackable-website .
docker run --rm -itd -v "$PWD/data:/data" -p 80:80 --name hackable-website hackable-website
```

You will reach the website by going to `http://127.0.0.1`
