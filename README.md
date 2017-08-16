# Generator

Full documentation is in the change of development. Until then, here's some preliminary info.

## Usage
To work with this library, all you need to do is write this code:

``
$obj = new RandomString();
``

Now you're set to go. To generate a random string, there are several methods available:
`string()` - generates a string using letters (both lowercase and uppercase)
`lowString()` - uses only lowercase letters
`upString()` - uses only uppercase letters
`numberString()` - uses all letters and numbers
`numbers()` - uses numbers only
`punctuaton()` - uses only predefined punctuation
`anyString()` - uses all the characters available

For example,

``
$obj = new RandomString();

$obj->string(10); // generates a random string of 10 letters (e.g. MsrhRvFUsJ)

$obj->numberString(20); // 20-letter-string consisting of letters and numbers (e.g. uYN7UPEHU7lk9zvpBnAc)
``


That wraps it up for now. There are more features coming, including:
- creating a Composer package
- being able to generate random strings from your custom input
- more general methods for very specific needs (method concatenation)
- an ability to generate a random string out of randomly many characters and of random length
