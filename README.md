# FlickrVisualization
Visualize Flickr image searches as a treemap of tag frequencies
Written by Cecilia Mauceri

Description
----------------------------------------------------------

As part of my thesis in commonsense knowledge extraction, (See VisualCommonSense Repo) , I generated a vocabulary of Flickr tags for the various search terms, and an index of images tagged with pairs of these tags. It occurred to me that it would be interesting to view the structure of the cooccurences of these tags. 

This interactive Treemap visualization, is a proof of concept, which shows a selection of Flickr images proportional to the frequency of pairs of image tags. One tag is displayed as the title, i.e. "cooking". The other tags, the subtitles, are arranged in a treemap according to how many images are tagged with both the title tag and the subtitle tag. This gives a simple visualization of the motifs associated with the title tag.

Click to zoom on the images for a tag pair or use the menu on the right to jump to a different tag.

I used a very limited set of vocabulary and images for this proof of concept visualization. Ideally, you would be able to see this structure after performing a Flickr search using a large set of the most frequent tags and use it to expand and filter your search results.

How to use
---------------------------------------------------------

To browse, the visualization is currently hosted at http://web.engr.illinois.edu/~mauceri2/

For your own use, simply replace the data/ files to change the displayed tree structure.

These visualizations use javascript with the d3.js library and are rendered in a webbrowser. 
To view them, you will need to put this folder on your local server path and be connected to the internet. 


Known bugs
---------------------------------------------------------

You might hit the Flickr API query limit and be unable to view images after browsing for a while.


Credits
---------------------------------------------------------

Based on d3.js gallery example https://mbostock.github.com/d3/talk/20111018/treemap.html and https://secure.polisci.ohio-state.edu/faq/d3/zoomabletreemap_code.php