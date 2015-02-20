<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use App\Article;

class ArticlesTableSeeder extends Seeder {

	public function run()
	{
		DB::table('articles')->truncate();
		Article::create([
			'title'        => 'Introducing Hyle, a new way to create & share After Effects content.',
			'slug'         => 'introducing-hyle',
			'content'      => 'Hyle aims at giving After Effects users more possibilities to interact with this great piece of software. It allows you to generate content from a simple and understandable text syntax and it\'s designed to be simple enough to be used by anybody but powerful enough for everybody.

<!-- more -->

### What motivated Hyle

Hyle is a solution to two different problems I would encounter on a daily basis.

#### 1. Efficiently starting a project

I tend to keep a rather complex folder and composition structure which helps me stay organized and avoid working in a messy project structure. I use this structure even on the smallest projects to help me move from one project to another without having to search where things are. I sure tried [Load project or template at startup](http://aescripts.com/load-project-or-template-at-startup/) script which sure is a good solution and a well designed script. It didn\'t quite work out for me tho since I often wanted to tweak the structure as I was working on a project. I then created a script (initially called Jase) that would parse JSON to create a project structure of folders and compositions.

#### 2. After Effects, be the CSS to my HTML

Let me explain that one here. I really enjoy working with After Effects and Photoshop, but inserting big amounts of data in both of them is a surprisingly tedious task. I worked in the web design/development before I started animation in which I learned to use tools like [Sublime Text](http://www.sublimetext.com/) to write and edit text at a really good pace. I wished there would be a way to edit data in my text editor while styling, animating, etc. in my Adobe software. Just like web developers do with HTML and CSS, they separate concerns. That\'s what lead to extending the forementioned *Jase* into something more powerful that would not be limited to project structure, but instead focus on just generating content from data.

That\'s what created Hyle. Not much of a frustration that After Effects wasn\'t doing enought but more of a hope that it could do a little more.

### Only just a beginning

Hyle is not yet perfect and still missing many features, but it\'s working and it\'s good at what it does. It\'s in beta right now and will soon be publicly available. There will be frequent updates and improvements when it\'ll be out. I sincerely hope that Hyle will improve your workflow as much as it already does for mine.

Stay tuned via [Twitter](https://twitter.com/hylescript) and [Facebook](https://www.facebook.com/hylescript) for other annoucements and techniques on how to use Hyle.',
			'active'       => '1',
			'publish_date' => '2013-09-09 02:40:00',
		]);
		Article::create([
			'title'        => 'Sharing snippets with the pastebin',
			'slug'         => 'sharing-snippets-with-the-pastebin',
			'content'      => 'You may sometimes find yourself needing for a place to store your Hyle snippets to be able to just share a short link. To post it on Twitter maybe? Or send it to a colleague? The [pastebin](/paste) is a great way to do this. Just go in there, paste whatever you feel like sharing, hit save and you\'re good to go! You will get clean URLs such as [hyle.io/paste/Ng](http://hyle.io/paste/Ng).

<!-- more -->

### Heads Up!

This is a **not a secured or encrypted space** to store sensitive data. If you want to quickly share sensitive data, you might consider using tools such as [pastevault.com](https://www.pastevault.com/) or setting up a private [GitHub](https://github.com/) account.',
			'active'       => '1',
			'publish_date' => '2013-11-03 22:51:00',
		]);
		Article::create([
			'title'        => 'Answering Questions: “Can Hyle work the other way around and generate the script from an actual projet?” Not yet, but it will.',
			'slug'         => 'can-hyle-generate-the-script-from-an-actual-projet',
			'content'      => 'Hyle has officially launched today on [aescripts + aeplugins](http://aescripts.com/hyle/) and it has been an amazing launch. The script was really well received and seems to have piqued the interest of many After Effects users. Although many questions were raised in the comments and the emails I received. The main big question was “Can Hyle work the other way and generate the script from an actual projet?”, to which I will answer “Not yet, but it will”.

<!-- more -->

As you might imagine, Hyle is a fairly complex script but **it has been built with this feature in mind**. So, yes it is coming. It will be part of the next major release. You can have a look at this quick [roadmap](http://hyle.io/docs/roadmap) I have created to see what is coming up. This is really just an overview of what\'s coming and many more features will be added to it. As you can see, the \"Generate\" function is planned for version 2.0, which should be finished in a couple of months.

This is really motivating to see that users want more from Hyle and wish for it to become something bigger and more complete. Thanks again to all of you for the questions and suggestions and I will work to get these features ready as fast as possible.',
			'active'       => '1',
			'publish_date' => '2013-11-04 19:34:00',
		]);
		Article::create([
			'title'        => 'Get syntax highlighting with the new Hyle Sublime Text package.',
			'slug'         => 'get-syntax-highlighting-with-the-new-hyle-sublime-text-package',
			'content'      => 'Many people have asked about the syntax highlighting used in the [Article](http://www.youtube.com/watch?v=UyfU0DFtMuY). As mentioned in the [documentation],(http://hyle.io/docs/basic-understandings), Hyle\'s syntax is similar to [YAML](http://en.wikipedia.org/wiki/Yaml)’s, therefore, you can use the YAML syntax highlighting when you use Hyle.

<!-- more -->

Although, Sublime Text YAML package will only highlight `.yaml` and `.yml` files automatically, meaning you\'d have to constantly go `CMD`+`Shift`+`P`, `Set Syntax: YAML`.

### Custom Hyle Package

A Sublime Text package for Hyle is now available, with automatic syntax highlighting for `.hyle` files.

#### Get it from your package manager (recommended)

- Open the Command Pallete (`CTRL`+`Shift`+`P` or `CMD`+`Shift`+`P`).
- Type \"Install Package\" and hit return.
- Type \"Hyle\" and hit return.

#### Get it from Github

You can get the package over at [Github](https://github.com/Hyle-Script/Hyle-Sublime-Plugin). You will find the manual installation instructions there.

### Improvements will come

The package is really simple for the moment as it is only a fork of the YAML package. More features such as autocompletions and Hyle specific syntax highlights will eventually be added. Also, feel free to contribute!

',
			'active'       => '1',
			'publish_date' => '2013-11-25 18:48:00',
		]);
		Article::create([
			'title'        => 'The State of Hyle',
			'slug'         => 'the-state-of-hyle',
			'content'      => 'Many have recently asked, rightfully so, what was going on with Hyle. The recent lack of updates brought many to ask if it was still under active development. The answer is **yes, it is still under active development**.

<!-- more -->

Growing Hyle past its initial simplistic functions of generating folders and compositions, towards what I wanted it to be,  a universal markup syntax to exchange After Effects content as data; was a bigger task than what I initially expected it to be. As it has happened in the development of countless other pieces of software before it, the amount of features brought more and more complexity to a codebase that was not initially built to gracefully scale to this size, until the decision of rewriting and reorganizing everything imposed itself.

I have already been working on rewriting Hyle from the ground up for almost a year now and would’ve liked to release it at this time, but, for many reasons, the development did not go as fast and swift as I initially envisioned. That is why I felt like I should at least let you know where things are and where they are heading.

### Free, as in open-source.

Many showed their interest for not only Hyle in itself but also for a way they could make it work with their current workflow or with the script they were developing. Many asked for features, tweaks or corrections; bugs were reported, suggestions were made. I realized that this project could not ever go as fast as it should as long as I would be the only one on board. That is why I decided to open-source everything. This project will go as far as the community will want to take it. As soon as the rewriting is over and the project is stable enough, Hyle will be taken off [aescripts + aeplugins](http://aescripts.com) and moved on to [Github](http://github.com).

### New mindset

While working on the new version, I did focus on building a cleaner and better organized codebase, but I also focalized on modularity and making it interface agnostic. The feedback I received led me to understand that Hyle would often be used as a part of something bigger if it would be possible. So, the next version of Hyle will work more as an API than a regular UI Script. The current UI interface will still be available (also open sourced), but will be bundled as a separate script.

### What took so long

 As stated previously, there are many reasons for it. On the personal level, new projects and challenges had me shift my priorities a little. On the technical side, I learned a lot about ExtendScript and how the Adobe ecosystem works while developing Hyle. But learning and developing solutions oftentimes needed more time and work than expected. The After Effects script development community, while very friendly and supportive, is still a pretty small one compared to most programming languages communities. Therefore, tackling a certain problem does not always have its clear Stackoverflow answer.

### For those who purchased Hyle

 Many thanks, you are those which confirmed me that Hyle was addressing a real need. The project would not have gotten this far without you. Although the project is going to be free from now on, if there comes to be a paid version of a complementary product (and if all goes well there will), there sure will be a discount for you.

Again, thanks to all of you who have been on board until now and cheers to those planning to follow along. Let’s make something great together.',
			'active'       => '1',
			'publish_date' => '2014-12-11 07:24:00',
		]);
	}
}