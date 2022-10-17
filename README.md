
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

    private function randstringSplit() { return $randString; }
    private function useridSplit($string) { return $elabstring; }
    public function generateKey($username) { return $key }
}
```



