
			   // wrap each title letter
			   $("#start h1").wrapEach(/(.)/g, "<span>$1</span>");

			   // animations
			   var nervousHat = new TimelineMax({repeat: -1, yoyo: true})
			      .add(TweenMax.to("#start .threebears", 0.3, {bottom: "+=5", left: "-=6", rotation: -3}))
				  .add(TweenMax.to("#start .threebears", 0.3, {bottom: "-=10", left: "+=6", rotation: 0}))
				  .add(TweenMax.to("#start .threebears", 0.3, {bottom: "+=5", left: "+=6", rotation: 3}))
				  .add(TweenMax.to("#start .threebears", 0.3, {bottom: "-=5", left: "-=3", rotation: 1.5}))
				  .add(TweenMax.to("#start .threebears", 0.3, {bottom: "+=5", left: "-=6", rotation: -1.5}))
				  .add(TweenMax.to("#start .threebears", 0.3, {bottom: "+=5", left: "+=3", rotation: 0}))
				  .add(TweenMax.to("#start .threebears", 0.3, {bottom: "-=10"}));
			   var abracadabra = TweenMax.fromTo("#start .wand", 1, {top: -$(window).height()/3, left: 370, rotation: 20}, {top: 10, rotation: -20});
			   var reveal = new TimelineMax()
				  .add([
				     TweenMax.to("#start .threebears", 1, {bottom: $(window).height(), left: "-=50", rotation: -20}),
					 TweenMax.from("#start h1", 1, {scale: 0.4, top: "+=70", delay: 0.1, autoAlpha: 0}),
					 TweenMax.to("#start .wand", 0.8, {top: -$(window).height()/3, left: 450, rotation: 30}),
					 TweenMax.to("#start .floor", 1, {autoAlpha: 0})
				  ]);
			   var laola = new TimelineMax()
			      .add(TweenMax.staggerTo("#start h1 span", 0.5, {top: -20}, 0.2))
			      .add(TweenMax.staggerTo("#start h1 span", 0.5, {top: 0}, 0.2), 0.5);

			   // container pin
			   var startpin = new ScrollScene({
			      duration: 700
			   })
			      .setPin("section#start")
				  .addTo(controller);

			   // msg scroll ani
			   new ScrollScene({
			      duration: 140,
				  offset: -100
			   })
			      .setTween(TweenMax.to("#msg div.scroll", 1, {backgroundPosition: "0 13px", repeat: -1, delay: 1, repeatDelay: 2, ease: Linear.easeNone}))
				  .addTo(controller);
			   // msg hide
			   new ScrollScene({
			      offset: 40
			   })
			      .setTween(TweenMax.to("#msg", 0.5, {bottom: -40}))
				  .addTo(controller);

			   // hat movement
			   new ScrollScene({
			      duration: 300,
				  offset: -100
			   })
			      .setTween(nervousHat)
				  .addTo(controller);

			   // magic wand
			   new ScrollScene({
			      offset: 20,
			      duration: 180
			   })
			   .on("end", function (e) {
			      if (e.scrollDirection == "FORWARD" && startpin.progress() < 0.37) { // check pin progress so it doesnt launch on refresh
				     // make it rain!
					 $("#start .sparkpoint").sparkle({
					    amount: 40,
						duration: 0.2
					 });
				  }
			   })
			      .setTween(abracadabra)
			      .addTo(controller);

			   // big reveal
			   new ScrollScene({
			      duration: 300,
				  offset: 260
			   })
				  .setTween(reveal)
				  .addTo(controller);

			   // jumping text
			   new ScrollScene({
			      duration: 200,
				  offset: 450
			   })
			      .setTween(laola)
				  .addTo(controller);