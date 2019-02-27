require(['dojo/_base/kernel', 'dojo/ready'], function  (dojo, ready) {
	const words_per_minute = 200;

	function inject_prompt(row) {
		try {
			console.log('ip', row);

			const words = row.querySelector(".content-inner").textContent.split(/\s+/).length;
			const ttr = Math.round(words / words_per_minute).toFixed(0);

			if (ttr > 1) {

				const pr = document.createElement("span");
				pr.className = 'time-to-read label';
				pr.innerHTML = "Time to read: ~" + ttr  + " minutes.";

				row.querySelector(".titleWrap").appendChild(pr);
			}

		} catch (e) {
			console.warn(e);
		}

	}

	ready(function() {
		PluginHost.register(PluginHost.HOOK_ARTICLE_RENDERED_CDM, function(row) {
			window.setTimeout(function() {
				inject_prompt(row);
			}, 100);

			return true;
		});
	});

});