# Static Asset Versioning

Automatically version static assets with PHP

We've all been in the situation at some point where clients say "I can't see the difference" or "It all looks broken" and your response is almost always "Have you cleared your browsers cache". There is a better way! 

Including and using this class in your project will allow you to make changes to your static files primarily CSS & JavaScript, I'm not going to pretend this is some voodoo black magic at work, it really isn't. It's a simple class that has one static method that will read a files path, check when it was last modified, append the last modified time stamp to the file name in the form of [path_to_file].css?v=[timestamp] and finally return the modified string.

It's simple really, because the file name has changed a browsers cache of that file is automatically expired and the updated file is downloaded and re-cached until the next time you change something.

## Usage

Usage is really simple, just include the class into your project and call the static method.

include 'static_asset.php';
echo StaticAsset::version('testfile.php');

That's it!
