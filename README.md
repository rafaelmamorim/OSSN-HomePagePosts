# OSSN-HomePagePost

This component allows users to decide to see posts from all or friends only by showing two options below the new post block in NewsFeed. 

![Screenshot](https://www.rafaelamorim.com.br/temp/homepageposts.png)

## How to use

1) Before enable this function, open components\OssnWall\ossn_com.php and comment (or delete, by your own risk) the block of function ossn_get_homepage_wall_access().
   I know of the existence of runkit7_function_remove function but I don't like to enable a PHP component when you can comment on some code.
2) Enable it!
3) In the next OssnWall updates, you need to comment again on the function :-/

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[OSSN](http://www.opensource-socialnetwork.org/licence)
