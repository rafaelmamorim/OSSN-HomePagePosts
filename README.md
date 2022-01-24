# OSSN-HomePagePost

This component allows users to decide to see posts from all or friends only by showing two options below the new post block in NewsFeed. 

![Screenshot](https://www.rafaelamorim.com.br/temp/homepageposts.png)

## Known issue

If any other component uses the ossn_get_homepage_wall_access() function it is necessary to change it to hpage_posts_get_homepage_wall_access() for everything to work correctly. As far as I know, this function is used in the following components:

- [HashTag](https://www.openteknik.com/product/view/2355/hash-tags>)
- [PopularPosts](https://www.openteknik.com/product/view/4869/popularposts)¹. 

¹ Thanks to [Hugo](https://www.opensource-socialnetwork.org/u/Erassus) for testing and reporting

## Contributing
Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

Please make sure to update tests as appropriate.

## License
[OSSN](http://www.opensource-socialnetwork.org/licence)
