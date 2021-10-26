
// Untuk work whatsapp
override fun shouldOverrideUrlLoading(view: WebView, url: String?): Boolean {
    Log.d(TAG, "URL: " + url!!)
    if (internetCheck(mContext)) {
        // If you wnat to open url inside then use
//                    view.loadUrl(url);

        // if you wanna open outside of app
        if (url.contains("whatsapp")) {
            val intent = Intent(Intent.ACTION_VIEW, Uri.parse(url))
            startActivity(intent)
            return true
        }else {
            // Otherwise, give the default behavior (open in browser)
            view.loadUrl(url)
            return false
        }
    } else {
//                    prgs.visibility = View.GONE
        mWebView.visibility = View.GONE
        layoutSplash.visibility = View.GONE
        layoutNoInternet.visibility = View.VISIBLE
    }

    return true
}