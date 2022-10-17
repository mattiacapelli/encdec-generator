
# 🔑 Server/Client splitted Encryption Key Generator

A simple key generator designed to be safe for cloud encrypted services
## 📐 Key Structure
The key consists of 32 bytes divided into two parts. The first is dedicated 
to the server and is the key kept on the server, while the second is the key 
dedicated to the client and is kept on the client's devices. Both the first 
parts split again into three more. The first identifies whether the key is 
dedicated to the server or the client, the second indicates the user to whom 
the key has been assigned while the third is a pseudo-random string.

<img src="/img/keystruct.png" alt="Alt text" title="Key Structure">

## 🖥 Class Section

```php
class encdeckey {

    private $split_lenght;
    private $split_client;

    private function randstringSplit() { return $randString; } // Return a random string
    private function useridSplit($string) { return $elabstring; } // Return a string with the user id (it's created removing from username all the vowels)
    public function generateKey($username) { return $key } // Return an array with the key for the server, the key for the client and the full key ("server", "client", "full")
}
```

## Authors

- [@mattiacapelli](https://www.github.com/mattiacapelli)

## Support
<div align="center">
            <a href="https://www.buymeacoffee.com/mattiacapelli" target="_blank" style="display: inline-block;">
                <img
                    src="https://img.shields.io/badge/Donate-Buy%20Me%20A%20Coffee-orange.svg?style=flat-square&logo=buymeacoffee" 
                    align="center"
                />
            </a></div>


## License

[MIT](https://github.com/mattiacapelli/encdec-generator/blob/main/LICENSE)


