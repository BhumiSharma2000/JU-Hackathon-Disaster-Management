-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2019 at 05:33 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sapds`
--

-- --------------------------------------------------------

--
-- Table structure for table `addcheck`
--

CREATE TABLE `addcheck` (
  `id` int(11) NOT NULL,
  `c_item` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(30) NOT NULL,
  `comment` varchar(300) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0',
  `subject` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comment`, `status`, `subject`) VALUES
(21, 'EarthQuake', 1, 'the earthquake come with the intensity of 1000km/h'),
(22, 'There is a chances of Tsunami within next 24 hours, so Be aware', 1, 'Tsunami'),
(23, 'There is a electric pole down on the NH8 ', 1, 'Electric Pole Down');

-- --------------------------------------------------------

--
-- Table structure for table `graph`
--

CREATE TABLE `graph` (
  `g_id` int(11) NOT NULL,
  `disaster` varchar(50) NOT NULL,
  `count` int(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `graph`
--

INSERT INTO `graph` (`g_id`, `disaster`, `count`, `timestamp`, `status`) VALUES
(1, 'earthquake', 100, '2019-07-12 08:51:31', 1),
(2, 'tsunami', 11, '2019-07-12 08:51:31', 1),
(3, 'flood', 26, '2019-07-12 09:00:46', 1),
(4, 'drought', 1, '2019-07-12 09:13:20', 1),
(5, 'manmade', 10, '2019-07-12 09:26:49', 1),
(11, 'Hurricane', 102, '2019-07-17 07:03:38', NULL),
(12, 'WildFires', 11, '2019-07-17 07:05:32', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tb1_alert`
--

CREATE TABLE `tb1_alert` (
  `alert_id` int(10) NOT NULL,
  `name` int(20) NOT NULL,
  `department` varchar(20) NOT NULL,
  `disaster_name` varchar(20) NOT NULL,
  `occurred_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `intensity` varchar(20) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb1_blog`
--

CREATE TABLE `tb1_blog` (
  `blog_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `Title` varchar(100) NOT NULL,
  `Author` varchar(50) NOT NULL,
  `description` mediumtext NOT NULL,
  `publish_date` date NOT NULL,
  `image` varchar(100) NOT NULL,
  `status` int(10) NOT NULL,
  `verified` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_blog`
--

INSERT INTO `tb1_blog` (`blog_id`, `login_id`, `Title`, `Author`, `description`, `publish_date`, `image`, `status`, `verified`, `created_on`, `updated_on`) VALUES
(40, 51, 'Personal Reflections on Resilience: New Orleans Style', 'Tanya Gulliver-Garcia', '\r\nAt our staff retreat this week, we got into a discussion about the word â€œresiliency.â€ It has become one of those buzz words that is frequently used, yet it is hard to put into words what exactly it means. The Stress and Resilience Institute defines â€œResilience as the ability to bounce back and grow and thrive during stress, challenge and changeâ€ and thatâ€™s probably the closest to the way I think about it in the context of disasters. For me, resiliency is also about the development of personal, familial, organizational and community preparedness which makes it easier to recover in the face of the next trauma.\r\n\r\nAnd I feel like I know resiliency when I see it. As I reflect on a day that included a three-mile drive that took over two hours because of extensive flooding in New Orleans while planning for a potential hurricane to make landfall in less than 72 hours, I have some examples.\r\n\r\nFinding a Way. I panicked as I was driving home that if I got stuck for too long I wouldnâ€™t have enough provisions. I have a newish car and havenâ€™t set up my vehicle emergency kit. Then I realized that not only was I traveling with my usual supply of granola bars and water but that high ground stores and restaurants were still open while the city flooded around them. And I knew that if it continued much longer the local independent entrepreneurs would find a way to drag their coolers full of snacks and water through the water to sell to motorists.\r\nPrepare. Prepare. Prepare. Iâ€™ve been traveling a lot and have another trip coming up this weekend (hurricane willing). I wondered whether I had enough water and food for 72 hours to take care of my own needs to meet the â€œ72 is up to youâ€ slogan our local emergency management preaches. And yes, I do. I had stocked up pre-Hurricane season out of habit with canned goods that I can eat from a can if worse comes to worse and sure enough I had seven gallons of water (plus soda and Gatorade).\r\nTrust Support Systems. I wondered what to do with my cat this weekend as my closest neighbor is evacuating and my other usual cat sitter may not be able to access my side of town. A quick chat with a neighbor made me realize that my support system is strong enough that someone will be nearby to help.\r\nA Sense of Humor. I went by a dinghy full of kids and saw pictures of folks swimming, canoeing and kayaking down New Orleans streets. By early evening the jokes had started including a â€œComing to New Orleans â€“ Uber Canoeâ€ ad.\r\nPositive Attitudes. I took an evening drive. The water had receded and life was continuing as normal. Now folks are in hurricane prep mode. There is a heightened anxiety in the air because the river was already high and now the ground is saturated. But there is also a strong sense of â€œweâ€™ll get through this.â€\r\nCommunity Pride. I just checked my Facebook and a friend had posted a picture of himself in his dry backyard, drinking a cocktail with the caption: â€œThis is how we close down a stormy day. #nightcap #nolastyle.â€\r\nSo, how does this relate to resilience in disaster philanthropy?\r\n\r\nMy vision of disaster funding is that we support community organizations â€“ those who know the neighborhoods and the peopleâ€“ to not just fix a destroyed home but a damaged spirit. We should look at what skills and assets we can help people develop to make them individually stronger. We can create opportunities for the development of networks, leadership and community social supports which allow more resilient people to support those most in need of help. We should ensure that agencies and local community foundations doing the brunt of this work post-disaster are supported by their funders and also by their colleagues in other jurisdictions.\r\n\r\nCDP grants often focus on organizational capacity building in whole or part because we know that strong, local, nonprofit organizations provide the best long-term support for a community after a disaster. And we focus on mental health because a disaster is a trauma and it is hard to be resilient when you are dealing with emotional trauma. I am hoping that the approaching storm wonâ€™t put New Orleans to the test, but if it does, I know the resilient spirit of the city will persevere.', '2019-07-12', '../photos/66463645_3405872409438880_2248334535286587392_n.jpg', 1, 1, '2019-07-16 19:58:51', '0000-00-00 00:00:00'),
(41, 51, 'What Weâ€™re Watching: Weekly Disaster Update', 'Tanya Gulliver-Garcia', 'We know all too well that disaster can strike at any time, in any place in the world. Some disasters make headlines; others do not. Here at the Center for Disaster Philanthropy (CDP), we keep an eye on status of disasters worldwide and compile a list of the ones weâ€™re tracking weekly, along with relevant disaster-related media coverage. To stay informed, we invite you to check back every Tuesday for updates on new, ongoing and past disasters. Listed below is information about what we are monitoring the week of July 15. FOCUS ON: Hurricane Barry Around 11 a.m. ET Saturday, Barry became the first hurricane of the 2019 Atlantic hurricane season and the fourth hurricane to ever make landfall in Louisiana in the month of July. After making landfall near Intercoastal, Louisiana (100 miles west of New Orleans) as a Category 1 storm, Barry weakened to a tropical storm. Barry brought heavy rains, strong winds and storm surge throughout Louisiana, which caused flooding in several parishes. At least three levees overtopped in parishes south of New Orleans, prompting evacuation orders, blocking access to several roads and requiring people to be rescued. By Sunday morning, more than 150,000 customers across Louisiana were without power. Despite weakening to a tropical depression late Sunday afternoon, Barry continued to bring the threat of heavy rain, flooding and tornadoes as it moved north. On Monday, Tropical Depression Barry moved slowly north through Arkansas. Much of Louisiana and Mississippi were still under flash flood watches, as were parts of Arkansas, Texas, Tennessee and Missouri. According to the National Hurricane Center, as of Tuesday morning, Barry is a post-tropical cyclone drifting across Missouri. The threat of significant flash flooding remains through parts of southern Arkansas. Previous/Ongoing Disasters India, Nepal and Bangladesh â€“ Monsoon Rains: Storms and flooding devastated parts of India, Nepal and Bangladesh over the past week. In India, monsoon rains have displaced nearly two million people in the state of Bihar and around 1.7 million in Assam. Landslides and flooding have killed at least 67 people in Nepal and displaced more than 10,000. Heavy rains also caused at least 29 deaths in Bangladesh, including in the overcrowded Rohingya refugee camps. The bad weather is expected to continue. Democratic Republic of the Congo (DRC) â€“ Ebola Outbreak: As of July 12, the total number of deaths in the Congo are at 1,655 and the outbreak has now reached 2,477 cases total. On Sunday, the first case of Ebola was discovered in the Goma, the largest city in eastern Congo and a major transport hub. This is raising concerns that the virus could spread quickly in the city of 1 million people. Also, two Ebola health workers were attacked and killed in eastern Congo over the weekend, further complicating efforts to stop the outbreak. See our CDP Ebola Outbreak Disaster Profile for regularly updated information. You can watch CDPâ€™s Ebola webinar here. Ridgecrest, California â€“ Earthquakes: California residents experienced a 4.9-magnitude earthquake on Friday, July 12, just one week after the largest earthquakes to hit southern California in more than 20 years were felt on Thursday, July 4 and Friday, July 5. This latest aftershock is one of thousands that will likely be felt over the next several years. Canada â€“ Wildfires: Wildfires in Manitoba and Ontario have burned thousands of acres of land and forced the evacuation of hundreds of people. As of July 14, there are 20 active fires in the northwest region, seven of which are not under control. Smoke from the fires has spread over parts of southern Canada and into the United States. What Weâ€™re Reading/Watching New Report Predicts Six Major Hurricanes in the 2019 Season â€“ Orlando Sentinel: â€œMeteorologists are predicting six major hurricanes to develop in the remainder of the 2019 season, according to a new report released Tuesday by the Colorado State University Tropical Meteorology Project. CSU defined major hurricanes as categories 3, 4 and 5.â€ New Orleans resident worried about the storm: â€œKatrina left a lot of trauma behindâ€ â€“ CNN: I was interviewed in this CNN report on the impending stormâ€¦â€œOne woman who lives in New Orleans said the possibility of another disaster is traumatic and stressful for people who lived through Hurricane Katrina. Tanya Gulliver-Garcia, who lives in New Orleansâ€™ Broadmoor neighborhood, told CNN: â€˜My biggest concern though is for my friends and neighbors, especially those who lived through Katrina. This storm is stressing them out. Trauma stays in your body and Katrina left a lot of trauma behind. Iâ€™m also concerned for those who donâ€™t have the means to evacuate. Their choices were and are much more limited than mine. I have a network of folks across the country who would take me in at a momentâ€™s notice and the ability to get there. Many people in this community donâ€™t have that luxury,â€™ she said.â€ Why Is Tropical Storm Barry Such a Threat? The Science Behind the Brewing Hurricane â€“ Time: â€œSeveral factors tied to man-made climate change are contributing to the urgent alarm over soon-to-be Hurricane Barry: unusually warm ocean temperatures in the Gulf of Mexico and water levels elevated by a year of record rainfall.â€ Rippling Rainbow Map Shows How California Earthquakes Moved the Earth â€“ NPR: â€œThe map was created by the Advanced Rapid Imaging and Analysis team at NASAâ€™s Jet Propulsion Laboratory. It shows rippling rainbows forming a circular pattern around the faults of the two quakes. Each rainbow stripes means that the ground has been displaced there by some 4.8 inches.â€ Southern U.S. Border Humanitarian Crisis Assistance Guide: â€œThis guide was created to provide opportunities for Americans to assist in the migrant crisis on our Southern Border.â€ In Puerto Rico, The Campaign for a Hurricane Proof House â€“ NPR: â€œIn Puerto Rico, nearly two years after hurricane Maria, the need for safe, affordable housing is still a massive challenge. â€˜We have more than a half million people affected. And we have to build, minimum, 75,000 homes,â€™ says Astrid Diaz, a well-known architect in Puerto Rico. She was part of a FEMA team that assessed the islandâ€™s infrastructure after the stormâ€¦But long before the storm, she urged residents on the island to develop a disaster plan and to make their homes hurricane-resistant. Since the storm, Diaz has a new project. Sheâ€™s designed a modular home, resistant to hurricane-force winds that she says can be built for $30,000. Not coincidentally, thatâ€™s the maximum amount of assistance FEMA makes available for homeowners.â€ Midyear Update: 10 Humanitarian Crises and Trends to Watch in 2019 â€“ The New Humanitarian: â€œFrom new trends in aid policy and climate displacement to political transitions in South Sudan and the Democratic Republic of Congo, our reporting has examined the shifting terrain of humanitarian needs and response. Hereâ€™s what has changed through the year, what weâ€™re paying special attention to, and how it may affect the lives and livelihoods of people on the ground.â€', '2019-07-16', '../photos/img.jpg', 1, 0, '2019-07-16 20:00:37', '0000-00-00 00:00:00'),
(42, 51, 'Actions Have Consequences', 'Robert G. Ottenhoff', 'Actions have consequences. Sometimes the consequences are unintended. At worst, they are not even considered.\r\n\r\nHere at the Center for Disaster Philanthropy (CDP) we have been spending time and energy thinking through what we do â€“ and how we do it â€“ in order to evaluate whether our actions result in the consequences we intend for them.\r\n\r\nOne of our intended actions as an organization is to â€œhelp vulnerable populations.â€ This has been one of our commitments from our inception and has been a major focus of our grantmaking. It is set out in our vision: â€œA world where donors strategically plan for and respond to disasters in order to minimize their impact on vulnerable populations and communities.â€\r\n\r\nWho is considered part of a â€œvulnerable population?â€ And what is the best way to help them?\r\n\r\nConsider this example. An NPR investigation found that â€œacross the country, white Americans and those with more wealth often receive more federal dollars after a disaster than do minorities and those with less wealth. Studies by sociologists, as well as climate scientists, urban planners and economists, suggest that disasters, and the federal aid that follows, disproportionately benefit wealthier Americans. The same is also true along racial lines, with white communities benefiting disproportionately.â€\r\n\r\nWhen FEMA employees developed disaster reimbursement policies years ago, my hunch is that they were focused on how to best help people recover from disasters, with a heavy emphasis on protecting â€œtaxpayer risk.â€ Were they thinking of housing ownership patterns? Or neighborhood wealth patterns? Or who typically lives in vulnerable geographical areas? As NPR observes: â€œFederal aid isnâ€™t necessarily allocated to those who need it most; itâ€™s allocated according to cost-benefit calculations meant to minimize taxpayer risk. Put another way, after a disaster, rich people get richer and poor people get poorer. And federal disaster spending appears to exacerbate that wealth inequality.â€\r\n\r\nResearchers Junia Howell and James Elliott recently reported in another study: â€œThe more FEMA aid a county receives, the more unequal wealth becomes between more and less advantaged residents, holding all else constant, including local hazard damages.â€\r\n\r\nAt an international level, the challenge is even greater. Poor countries are not only more vulnerable to climate change issues, they have fewer resources to do something to mitigate the disaster or recover afterwards.\r\n\r\nAccording to a new report from the U.N., â€œhunger is growing and the world is not on track to end extreme poverty by 2030, mainly because progress is being undermined by the impact of climate change and increasing inequality.â€\r\n\r\nOne step we have taken here at CDP is to work with 14 foundations and corporations on how to bring more decision making to the local level. As Kim Maphis Early reported in a CDP blog, this effort aims to â€œreturn local actors, whether civil society organizations or public institutions, to the center of the humanitarian system with a greater role in humanitarian response.â€(Time to Let Go) Those on-the-ground conduct program planning and management, allowing them to use their local knowledge, history and connections to develop services that are compatible with the cultural, socio-political and economic climates of the places that they serve, giving communities a more holistic recovery.â€\r\n\r\nAnother step we are discussing at CDP is how to improve the way we serve vulnerable populations in our grantmaking work. A seminal book on disaster vulnerability (Piers Blaikie, et al., 2003) provides the following definition: â€œBy â€˜vulnerabilityâ€™ we mean the characteristics of a person or group in terms of their capacity to anticipate, cope with, resist, and recover from the impacts of a natural hazard. It involves a combination of factors that determine the degree to which someoneâ€™s life and livelihood is put at risk by a discrete and identifiable event in nature or in society.â€\r\n\r\nWe will be considering four categories of vulnerability:\r\n\r\nEnvironmental â€“ Proximity to hazard-prone areas (including risk of fire, flood, hurricanes, earthquakes, drought etc.), climate change, management of natural resources.\r\nPhysical/Built Infrastructure â€“ Construction of buildings and infrastructure, land use management, proximity to environmental hazards.\r\nEconomic â€“ Uninsured, vulnerable rural livelihoods, community dependence on a single industry (e.g. agriculture or tourism), un/under employment, globalization.\r\nSocial â€“ Demographic and social characteristics, inequality, social exclusion and discrimination, marginalization.', '2019-07-11', '../photos/20170330_133625254_iOS1-e1562787120776.jpg', 1, 0, '2019-07-16 20:02:01', '0000-00-00 00:00:00'),
(43, 51, 'The Future of Our Cities & Communities Depends on Urban Resiliency', 'Robert G. Ottenhoff', 'What are philanthropic donors thinking about urban resilience? It depends on your definition of urban resilience. Is it advocacy for stronger building codes? Support for preparedness, recovery or mitigation? Training and support of vulnerable populations? Or a combination of all these and many more?\r\n\r\nAt the Center for Disaster Philanthropy (CDP), we advise corporations and foundations on how to make their disaster-related giving strategic and impactful. Our research has found that very few institutional donors have regular grantmaking programs dedicated to disasters and there are only a handful of foundations with program staff focused on disasters. Instead, contributions tend to be episodic and occasional in nature. Amounts fluctuate considerably based on the yearâ€™s events. Some foundations address disasters through their normal grantmaking lenses, such as children, vulnerable populations or economic development, rather than something called specifically â€œdisasters.â€\r\n\r\nWhen considering urban resilience, I start with the definition by the Rockefeller Foundation: â€œthe ability to survive and thrive in the face of increasingly unpredictable natural or manmade disasters, often spurred by climatic change or hiccups in the global economy.â€\r\n\r\nThere are sound reasons for philanthropic organizations to be supporting efforts at strengthening resiliency. In 2017, the United States experienced 16 major natural disasters that each resulted in $1 billion or more in damage. Hundreds of other smaller-scale disasters struck the nation as well, causing in total at least $320 billion in damage â€“ the most ever in a single year. This past year brought two major hurricanes, massive wildfires, significant floods, volcanic eruptions, super typhoons, major earthquakes and devastating tsunamis, with at least 14 $1 billion disasters in the U.S.\r\n\r\n\r\nThe number (bars, left axis), type (colors), and annual cost (right vertical axis) of U.S. billion-dollar disasters from 1980-2018. Running annual cost (grey line), along with the 95% confidence interval, and 5-year average costs (black line). The number and costs of disasters are increasing. Inland flooding (blue bars) and severe storms (green bars) are making in increasingly large contribution to the number of U.S. billion-dollar disasters. Source: Climate.gov\r\nPart of the increase in estimated damage costs is due to the increase in the frequency and intensity of disasters. Contributing factors include increased urbanization and growing populations. Here in the U.S., we have seen significant population growth in vulnerable coastal areas and in places with a history of frequent wildfires that worsen impacts when disasters strike.\r\n\r\nAmerican individuals, foundations and corporations typically respond to these catastrophes with an immediate and incredible outpouring of donations of cash, volunteer time, products and services. It is estimated that over $1 billion was donated in the aftermath of 2017â€™s Hurricane Harvey alone, a storm that impacted Houston and 41 counties in southeast Texas. By comparison, donated amounts to subsequent Hurricanes of Irma and Maria in 2017 and Florence and Michael in 2018 were considerably lower â€“ storms that generally hit less urban areas.\r\n\r\nOur research has found that the vast majority of contributions go to immediate relief and are given within thirty days of a disaster occurring. Relatively small amounts are giving to planning, preparation, mitigation and even long-term recovery. Contributions directly to resilience programs are tiny.\r\n\r\n\r\nMeasuring the State of Disaster Philanthropy, 2018\r\nAlthough the word â€œresilienceâ€ has been used for many years in both disaster and non-disaster settings, probably no single philanthropic entity has done more to promote and define the concept of resilience than the Rockefeller Foundation. Over the last decade, by its own count, more than a half billion dollars in grants have been awarded to advance the concept of resilience.\r\n\r\nSuperstorm Sandy sharpened the Foundationâ€™s approach because it underscored just how complacent cities could be. Judith Rodin, then CEO noted, â€œNew York has viewed itself as quite resilient, and there was a great deal of real and significant attention and investment after 9/11 to becoming more resilient â€“ and yet Sandy was catastrophic.â€\r\n\r\nThe reality is, until resilience is built into the priorities, budgets and culture of cities, disruptions â€“ natural or manmade â€“ can turn into disasters. However, this escalation neednâ€™t be inevitable. Indeed, with an integrated approach to resilience, disruption can be turned to advantage. Within each crisis lies an opportunity.\r\n\r\nSeeking ways to increase its impact and leverage its investments, in 2013 the Rockefeller Foundation launched 100 Resilient Cities (100RC) which took a comprehensive approach to resiliency. Adding to the impact, thinking broadly by including natural disasters, civil disturbances, economic disruptions and other potentially disruptive events also helped build political constituencies and collaborations.\r\n\r\nThe 100RC approach to infrastructure also appealed to cash-strapped cities. Rather than solely focusing on building a new highway, for example, the 100RC approach to resiliency suggested looking for multiple benefits like a new highway project that doubles as a water barrier along a river that also provides new recreational opportunities. Resiliency underscored the new mantra that â€œsingle uses of infrastructure are over.â€\r\n\r\nIn late 2018, the Urban Institute released an independent assessment of 100RC (funded by Rockefeller Foundation) that found member cities are widely adopting holistic resilience planning practices and â€œde-siloingâ€ city operations to tackle social, economic and physical challenges. Moreover, the analysis found 100RC is among the first global urban initiatives to employ a consistent set of tools, supports and resources across so many diverse cities for which no alternative exists.\r\n\r\nFindings suggest 100RC is contributing positively to six key areas of interest in its member cities by embedding resilience principles in city planning and operations, including:\r\n\r\nExplication of resilience in city planning.\r\nInternal consistency across citiesâ€™ various planning documents.\r\nEstablishment of a Chief Resilience Office or similar cross-sectoral coordinator.\r\nReduction in the strength of government silos that promote ineffective solutions, duplication and inefficiency.\r\nBetter collaboration across city, state and national levels of government.\r\nChanges to budgetary review procedures or leveraged funds for resilience-building efforts that may ultimately lead to more efficient and effective use of city funds.\r\nFind the current list of member cities here: www.100resilientcities.org/cities.\r\n\r\nDespite the apparent success, in April 2019, the Rockefeller Foundation announced it would disband Resilient Cities and no longer have dedicated staff. Its work, which had been supported by $164 million from Rockefeller in six years of existence, will be directed to other â€œpathways,â€ according to a statement by 100 Resilient Cities President Michael Berkowitz.\r\n\r\nWill the resilient cities movement, sparked by Rockefeller, make a difference for cities in the long run? Or will this end up only as a grant program that allowed cities to briefly do something they otherwise could notâ€”or would notâ€”have done? Will â€œresilience officersâ€ make a sufficient enough difference to earn ongoing funding within a city budget or will they be pushed aside by more urgent priorities? For philanthropy, another big question will be whether this movement can migrate from a Rockefeller Foundation inspired effort into one with broad support within the philanthropic community. Only time will tell whether these and other issues are sufficiently addressed so that building urban resilience becomes a movement.\r\n\r\nMeanwhile, there are more modest examples of efforts underway to build urban resiliency.\r\n\r\nOne is Rebuild By Design. It began as a design competition launched by the U.S. Department of Housing and Urban Development (HUD) in partnership with nonprofit organizations and the philanthropic sector, in response to Superstorm Sandyâ€™s devastating impact. In June 2013, it launched a multi-stage planning and design competition to promote resilience in the Sandy-affected region. Today, Rebuild By Design is in ten locations, including six American cities: San Francisco, Atlanta, Boston, Oakland, Boulder and Los Angeles. Projects include studying coastal areas, housing, transportation and climate change. In all these programs, Rebuild By Design looks for a multi-dimensional approach, with collaborations between designers, researchers, community members, government officials and subject matter experts.\r\n\r\nSome of CDPâ€™s own resilience work on Hurricane Harvey recovery is supporting efforts in and around Houston. The first challenge leaders faced in these communities was how to build back. Unquestionably, there was a sense of urgency to restore order. However, it is not only impractical but also unwise to build back and experience the same traumas following the next disaster. Is it possible to build back in a way to be in an improved position to endure future challenges? We believe so. The CDP Hurricane Harvey Recovery Fund is finding ways to build community resiliency â€“ capacity building for local organizations, affordable housing initiatives, a mobile mental health unit for Texas Childrenâ€™s Hospital, legal services for underserved populations, among others. Our holistic, targeted and localized approach to grantmaking is another example of how philanthropy can have transformative impacts in building resiliency.\r\n\r\nAnd in Puerto Rico, as we do with all our recovery funds, CDP contacted other donors to learn about their funding activities; researched what local nonprofit service providers were doing; and identified funding and service gaps. Ultimately, our grants committee concluded that our funding could make the most significant difference by focusing on: 1) food security, 2) health and mental health needs of older adults and 3) livelihoods and economic recovery for communities.\r\n\r\n\r\nWith Mayor Carmen YulÃ­n Cruz at the Plaza del Mercado de RÃ­o Piedras, January 2019. Photo by Brennan Banks\r\nOne notable project is in San Juan where we are part of the effort, led by The Solar Foundation and the Clinton Foundation, for the installation of solar and energy efficiency upgrades of the Plaza del Mercado de RÃ­o Piedras in San Juan, the largest produce market on the island, responsible for the livelihoods of 200 small business owners. Since Hurricane Maria, the energy situation has led to an unstable business environment. A $600,000 grant from The Hispanic Foundation and a $500,000 grant from CDP will cover the cost of the purchase and installation of the first phase of solar panels, battery capacity and LED lighting. Our grant also creates an apprenticeship program for local workers to learn skills related to solar installation, roofing and electrical work which will help promote local workforce development. The project is being done at the request of, and in close coordination with, the Municipality of San Juan.\r\n\r\nThe last decade has brought enormous natural disasters that have philanthropic leaders re-thinking their approaches. Merely funding immediate relief is no longer sufficient. Solely reacting to disasters is no longer sustainable. New approaches that strategically support all phases of disastersâ€”from planning to mitigation to recovery to resilienceâ€”are increasingly being addressed. The Rockefeller Foundationâ€™s major investment revealed a real desire among cities to do more with resilience. CDPâ€™s work in disaster areas, with a focus on medium- to long-term recovery expands the concept.\r\n\r\nAs with any large-scale commitment of tax dollars and philanthropic support, applying resources in an equitable manner is essential. There are stark considerations. Whose community are we making resilient? And at what cost? Who is being left behind? If not carefully undertaken, the resiliency movement could experience some of the pitfalls of the urban planning movement of the 1950â€™s and 1960â€™s where decades later we more fully understand the negative consequences of large-scale destruction and rebuilding of neighborhoods, and more clearly see those who benefited from the movement and those who lost out.\r\n\r\nThe hopeful signs of the resilience movement are only a beginning. The relatively few philanthropic commitments to resilience do not yet represent a philanthropic trend. However, they indicate a growing recognition that philanthropic contributions to disaster-related activities need to be aware of the full life cycle and can make a significant difference in creating more resilient cities, better able to withstand crises.', '2019-07-20', '../photos/New-Orleans-768x443.jpeg', 1, 0, '2019-07-16 20:03:50', '0000-00-00 00:00:00'),
(44, 51, 'Starbucks and Google Support Recovery in Kerala, India', 'Regine A. Webster', 'Monsoon downpours that started Aug. 8, 2018 in Indiaâ€™s southwestern state of Kerala triggered massive flooding and landslides. Early reports estimated the flooding caused $3 billion in damage to Kerala, a tropical coastal area on Indiaâ€™s southern tip. In some villages, floodwaters nearly 10 feet high swamped homes. According to the Kerala State Disaster Management Authority, at least 350 people died as the result of flooding and landslides from the near constant rain. Additionally, more than 800,000 people were displaced.\r\n\r\nIn response to the devastating flooding in Kerala, two funders demonstrated incredible generosity â€“ both the Starbucks Foundation and Google mobilized quickly and donated considerable funds to overcome the overwhelming odds and meet the incredible needs that arose following the floods.\r\n\r\nWith their generous funding, the Center for Disaster Philanthropy (CDP) was able to award four grants in the following manner.\r\n\r\nFirst, we funded Oxfam America to secure disaster recovery and risk reduction efforts through livelihoods augmentation of female members of flood-affected families in Kerala. With $86,972 in support, Oxfam will be able to increase local, viable livelihoods activities led by women; 1,000 women will benefit from training, skills and support for livelihoods practices.\r\n\r\nOxfam America received a second CDP grant to build back WASH systems and structures to ensure survival and future development of affected families in three disaster-affected districts of Kerala. With $150,000, Oxfam will be able to increase good hygiene and reduce communicable diseases through the rehabilitation of WASH facilities and hygiene promotion.\r\n\r\nA third grant was awarded to Plan International to implement an employment project for young people and women from the disadvantaged Dalit community. The $99,999 grant targets a small, very vulnerable and marginalized community that was disproportionately affected by the floods. Their program is implementing a Vocational Training for Entrepreneurship Promotion (VTEP) for 400 youth and women.\r\n\r\nLastly, funds went to support Habitat for Humanity Internationalâ€™s Housing Support Centers. The organization is providing flood-affected families with financial education and technical information to secure safe and durable housing. With $158,554 in grant funding, Habitat for Humanity International anticipates reaching 11,000 people.\r\n\r\nWe are so thankful to our grantees â€“ Oxfam International, Plan International and Habitat for Humanity International for their dedication to flood recovery and sustained development. The programs they are implementing in the areas of livelihoods, WASH, education and training, and sustainable housing are critical to restoring the lives of those affected by the floods in Kerala, India.\r\n\r\nAnd, our sincere thanks goes out to the Starbucks Foundation and to Google for their continued investment in disaster recovery. Disaster recovery does not occur easily; it takes the dedication, commitment and the generosity of funders like these. We are incredibly grateful for their support and know that our work together will help this region rebuild their way of life.', '2019-07-19', '../photos/Kerala.jpg', 1, 1, '2019-07-16 20:05:46', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_chart`
--

CREATE TABLE `tb1_chart` (
  `chart_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `no_of_occurrence` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb1_checklist`
--

CREATE TABLE `tb1_checklist` (
  `check_id` int(10) NOT NULL,
  `item` varchar(50) NOT NULL,
  `checked` int(10) NOT NULL,
  `status` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb1_currentdisaster`
--

CREATE TABLE `tb1_currentdisaster` (
  `disaster_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(50) NOT NULL,
  `occurred_on` date NOT NULL,
  `status` int(10) NOT NULL,
  `current_status` varchar(200) DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_currentdisaster`
--

INSERT INTO `tb1_currentdisaster` (`disaster_id`, `name`, `description`, `image`, `occurred_on`, `status`, `current_status`, `created_on`, `updated_on`) VALUES
(4, 'Vayu', 'It Will Reach By 19/july/2019 Night', '../photos/download.jpg', '2019-07-18', 1, 'It is 1000km Away', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Tsunami', 'It will Reach the Costal Area by 18th Night', '../photos/drow.jpg', '2019-07-18', 1, 'It is 1000 km away', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_detail`
--

CREATE TABLE `tb1_detail` (
  `detail_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_detail`
--

INSERT INTO `tb1_detail` (`detail_id`, `login_id`, `name`, `dob`, `gender`, `address`, `profile_pic`, `created_on`, `updated_on`) VALUES
(15, 16, 'Sharma Bhumi', '0000-00-00', 'female', 'H/502, Dev Vrushti, Near Tejendra Part-7, Ioc Road', '../photos/IMG_20170115_181525334.jpg', '2019-07-16 15:41:40', '0000-00-00 00:00:00'),
(16, 17, 'Bhumi Sharma', '2019-07-06', 'male', 'saibaug', '../photos/IMG_20180114_131937940.jpg', '2019-07-16 15:06:12', '0000-00-00 00:00:00'),
(65, 46, 'Mitendra Sharma', '2000-11-01', 'female', 'H/502, Dev Vrushti, Near Tejendra Part-7, Ioc Road', '../photos/IMG-20170101-WA0018.jpg', '2019-07-16 14:13:04', '0000-00-00 00:00:00'),
(68, 49, 'Mitendra Bhupendra Sharma', '1998-01-15', 'male', 'H/502, Dev Vrushti Appartment, Near TejendraNagar Part-7, Ioc Road', '../photos/IMG_20170807_151014.jpg', '2019-07-16 14:29:21', '0000-00-00 00:00:00'),
(69, 50, 'Zinal Thakkar', '2000-07-23', 'female', 'SaiBaug', '../photos/zinal.jpg', '2019-07-16 14:26:15', '0000-00-00 00:00:00'),
(70, 51, 'Ravina Sardar', '2001-08-23', 'female', 'Sarangpur', '../photos/IMG-20181031-WA0080.jpg', '2019-07-16 16:06:57', '0000-00-00 00:00:00'),
(71, 52, 'Twinkle Shukla', '2019-07-10', 'female', 'SaiBaug', '../photos/IMG_20170701_175944486.jpg', '2019-07-16 14:10:26', '0000-00-00 00:00:00'),
(72, 53, 'Devanshi Shah', '2019-07-12', 'female', 'Ishanpur', '../photos/IMG_20180119_133417856.jpg', '2019-07-16 14:01:00', '0000-00-00 00:00:00'),
(74, 55, 'Mamta Sharma', '2019-07-10', 'male', 'gghh', '../photos/IMG_20170210_222905.jpg', '2019-07-16 14:20:35', '0000-00-00 00:00:00'),
(80, 61, 'Hirva', '2019-07-10', 'male', 'Sarangpur', '../photos/IMG_20170928_224806871.jpg', '2019-07-16 15:46:51', '0000-00-00 00:00:00'),
(83, 64, 'Muskan Rawat', '2019-07-03', 'female', 'Ahmedabad', '../photos/IMG_20170928_224751985.jpg', '2019-07-16 16:01:16', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_disaster`
--

CREATE TABLE `tb1_disaster` (
  `disaster_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `description` varchar(5000) NOT NULL,
  `image` varchar(50) NOT NULL,
  `occurred_on` date NOT NULL,
  `status` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_disaster`
--

INSERT INTO `tb1_disaster` (`disaster_id`, `name`, `description`, `image`, `occurred_on`, `status`, `created_on`, `updated_on`) VALUES
(22, 'Bandipur Forest Fire	', 'On 21 February 2019, wildfire broke out in the bandipur tiger reserve. In history it is for first time where wildfire is flared up in bandipur and suddenly moving due to the sudden climatic change and rapid growth of dry grass and Lantana. According to reports there was no deaths of larger mammals in the park such as bision, elephants, leopard and tiger. But 10,000 acres of forest had been destroyed due to wildfire in bandipur', '../photos/bandipur.jpg', '2019-02-21', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Cyclone Fani', 'Cyclone Fani was the strongest tropical cyclone to strike the Odisha which is situated in India. On 26th April, in the west of Sumatra in Indian ocean a tropical depression was formed from which Fani cyclone was originated. Due to this 1.6 crore people were affected. It caused loss of over Rs 9,000 crore in Odisha According to the examination, Cyclone Fani destroyed 20,367 villages in 14 coastal districts and 1.88 lakh hectare', '../photos/fani.jpg', '2019-04-26', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Assam alcohol poisonings', 'In February 2019, at least 168 people died after drinking toxic bootleg alcohol in Golaghat and Jorhat districts in Indian state of Assam. The incident occurred two weeks after 100 people died by drinking toxic alcohol in the northern states of Uttar Pradesh and Uttarakhand. In February 2019, in Golaghat and Jorhat districts of Assam at least 168 people died after drinking toxic bootleg alcohol. The incident occurred two weeks', '../photos/assam.jpg', '2019-02-01', 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Surat Fire	', 'On 24 May 2019, a fire occurred at a commercial complex in Sarthana area of Surat, located in Gujarat state of India. In that fireTwenty-two students died and others were injured in an academic coaching centre which was located on the building terrace. The fire was started due to short circuit in air conditioner on the second floor the students in the coaching centre were trapped by the destruction of a wooden staircase. \n', '../photos/surat.jpg', '2019-05-24', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'KULLU BUS ACCIDENT', 'On 20 June 2019, in Dhoth Morh, tehsil Banjar, Kullu district in Himachal Pradesh an overloaded bus fell into a deep drain and in that accident 44 people died and 34 were injured. In Kullu hospitals, the injured were getting treatment. In that accident most of the victims were students, who were going back to home from Government Degree College.in that accident 44 people died and 34 were injured. it is a worst incident happen', '../photos/kullu.jpg', '2019-06-20', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Seemanchal Express derailment', 'Seemanchal Express derailment - On 3 February 2019 near Sahdei Buzurg in Vaishali district of Bihar, India, the Seemanchal Express derailment occurred. More than 30 people were injured and 6 were killed. Investigations suggest that due to fracture in rail line the derailment happened. On 3 February 2019 near Sahdei Buzurg in Vaishali district of Bihar, India, the Seemanchal Express derailment occurred.', '../photos/seemanchal.jpg', '2019-02-03', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, '	Bihar encephalitis outbreak', 'Bihar encephalitis outbreak - In June 2019, in Bihar state of India an outbreak of acute encephalitis syndrome occurred. It is the second-longest heatwave in the region. Due to hypoglycemia, more than 100 children were dead.', '../photos/Bihar.jpg', '2019-06-07', 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_fund`
--

CREATE TABLE `tb1_fund` (
  `fund_id` int(10) NOT NULL,
  `name` varchar(20) NOT NULL,
  `amount` int(10) NOT NULL,
  `transaction_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb1_incidence`
--

CREATE TABLE `tb1_incidence` (
  `incidence_id` int(10) NOT NULL,
  `login_id` int(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `location` varchar(50) NOT NULL,
  `description` varchar(50) NOT NULL,
  `image` varchar(50) NOT NULL,
  `occurred_date` date NOT NULL,
  `occurred_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` int(10) NOT NULL,
  `verified` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_incidence`
--

INSERT INTO `tb1_incidence` (`incidence_id`, `login_id`, `name`, `location`, `description`, `image`, `occurred_date`, `occurred_time`, `status`, `verified`, `created_on`, `updated_on`) VALUES
(13, 17, '', 'commerece six road', 'one tree is fallen on the main highway', 'photos/darjeeling landslide2.jpg', '2019-07-16', '2019-07-18 02:57:54', 0, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 17, '', 'Chandkheda Bus stop', 'one light pole is fallen on the bus', '../photos/54a3599840d8e.image.jpg', '2019-07-06', '2019-07-16 22:59:07', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 17, '', 'Namsata circle, ShahiBaug', 'there is a tree fallen on the road', '../photos/download (1).jpg', '2019-07-17', '0000-00-00 00:00:00', 1, 0, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_info`
--

CREATE TABLE `tb1_info` (
  `info_id` int(20) NOT NULL,
  `name` varchar(100) NOT NULL,
  `location` varchar(100) NOT NULL,
  `description` varchar(200) NOT NULL,
  `intensity` varchar(200) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_info`
--

INSERT INTO `tb1_info` (`info_id`, `name`, `location`, `description`, `intensity`, `email`, `phone`) VALUES
(13, 'xyz', 'ahmebad', '1000km', '5.2', '$email#@db', 9898660970),
(14, 'xyz', 'ahmebad', '1000km', '5.2', '$email#@db', 9898660970),
(15, 'fajh', 'jsah', 'jhsfj', 'jadhasj', '$email#@db', 9898660970),
(16, 'fani', 'ahmedabad', 'it is 1000km away from coastal area', '100 km/h', '$email#@db', 9898660970),
(17, 'Fani', 'Ahmedabad', 'It will reach Ahmedabad till today night', '100km/h', '', 0),
(18, 'fani', 'Ahmedabad', 'it is 1000km away from coastal area', '100km/h', '$email#@db', 9898660970),
(19, 'Fani', 'Ahmedabad', 'it is 1000km away from coastal area', '100km/h', '$email#@db', 9898660970),
(20, 'Fani', 'Ahmedabad', 'It is currently 1000km Away', '100km/h', 'sardarravina@gmail.com', 7359809861),
(21, 'Fani', 'Ahmedabad', 'It is currently 1000km away', '100km/h', '', 0),
(22, 'fani', 'Ahmedbad', 'it is 1000km away', '100km/h', 'sardarravina@gmail.com', 8320547900),
(23, 'earthquake', 'ahmedabad', 'it is occuring soon', '7.2 recter scale', 'sardarravina@gmail.com', 8320547900),
(24, 'Fani', 'Ahmedabad', 'It is currently 1000 km away', '100km/h', 'sharmabhumi2000@gmail.com', 9898660970),
(25, 'Vayu', 'Ahmedabad', 'it maybe 100km away', '100km/h', 'sharmabhumi2000@gmail.com', 9898660970),
(26, 'Tsunami', 'Ahmedabad', 'it is 100km away', '100km/h', 'sharmabhumi2000@gmail.com', 9898660970),
(27, 'Vayu', 'Dwarka', 'It will reach by tommorrow night', '100km/h', 'sardarravina@gmail.com', 8320547900);

-- --------------------------------------------------------

--
-- Table structure for table `tb1_login`
--

CREATE TABLE `tb1_login` (
  `login_id` int(10) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone_no` bigint(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `type` int(10) NOT NULL,
  `active` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_login`
--

INSERT INTO `tb1_login` (`login_id`, `email_id`, `phone_no`, `password`, `status`, `type`, `active`, `created_on`, `updated_on`) VALUES
(16, 'sharmabhumi2000@gmail.com', 9998252323, 'c20ad4d76fe97759aa27a0c99bff6710', 1, 2, 1, '2019-07-16 16:37:16', '0000-00-00 00:00:00'),
(17, 'bhumisharma401@gmail.com', 9725973035, 'c4ca4238a0b923820dcc509a6f75849b', 1, 1, 1, '2019-07-16 15:05:58', '0000-00-00 00:00:00'),
(46, 'mitendrasharma1998@gmail.com', 9574066880, '25d55ad283aa400af464c76d713c07ad', 1, 2, 1, '2019-07-14 09:26:40', '0000-00-00 00:00:00'),
(49, 'mitendrasharma102@gmail.com', 9574066883, '25d55ad283aa400af464c76d713c07ad', 1, 1, 1, '2019-07-14 09:26:37', '0000-00-00 00:00:00'),
(50, 'zinal23072000@gmail.com', 8866889017, '25d55ad283aa400af464c76d713c07ad', 1, 1, 1, '2019-07-14 09:49:40', '0000-00-00 00:00:00'),
(51, 'sardarravina@gmail.com', 8320547900, 'c20ad4d76fe97759aa27a0c99bff6710', 1, 3, 1, '2019-07-16 16:04:45', '0000-00-00 00:00:00'),
(52, 'twinkleshukla@gmail.com', 7878660970, '25d55ad283aa400af464c76d713c07ad', 1, 2, 1, '2019-07-16 16:22:57', '0000-00-00 00:00:00'),
(53, 'devanshi@gmail.com', 7845787878, '25d55ad283aa400af464c76d713c07ad', 1, 2, 1, '2019-07-16 16:23:00', '0000-00-00 00:00:00'),
(55, 'mamta@gmail.com', 9784578787, '25d55ad283aa400af464c76d713c07ad', 1, 1, 1, '2019-07-16 14:56:16', '0000-00-00 00:00:00'),
(61, 'hirva@gmail.com', 9745154545, '25d55ad283aa400af464c76d713c07ad', 1, 2, 1, '2019-07-16 16:23:06', '0000-00-00 00:00:00'),
(64, 'muskan071212001@gmail.com', 7898787478, '25d55ad283aa400af464c76d713c07ad', 1, 3, 1, '2019-07-16 23:07:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_map`
--

CREATE TABLE `tb1_map` (
  `map_id` int(10) NOT NULL,
  `address` varchar(500) NOT NULL,
  `latitude` float NOT NULL,
  `longitude` float NOT NULL,
  `status` int(10) NOT NULL,
  `mobile` bigint(50) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_map`
--

INSERT INTO `tb1_map` (`map_id`, `address`, `latitude`, `longitude`, `status`, `mobile`, `created_on`, `updated_on`) VALUES
(3, 'CommissionerAMR Andhra Pradesh Academy of Rural Development (APARD), Rajendranagar, Hyderabad, 500 030 Andhra Pradesh, India', 15.9129, 79.74, 1, 24014027, '2019-07-17 10:36:05', '0000-00-00 00:00:00'),
(4, 'Director General (Trg.)\nAdministrative Training Institute D-Sector, Naharlagum, District Papumpara, Arunachal Pradesh', 28.218, 94.7278, 1, 2244036, '2019-07-11 19:19:38', '0000-00-00 00:00:00'),
(5, 'Director \nAssam Administrative Staff College, Jawahar Nagar, P. O. Khanpara, Guwahati-781022, Assam', 26.2006, 92.9376, 1, 2361547, '2019-07-11 19:19:49', '0000-00-00 00:00:00'),
(6, 'Vice - Chancellor\n3, Tezpur University, Tezpur, NAPAAM, District Sonitpur, Assam-784 028', 26.2006, 92.9376, 1, 23263325, '2019-07-11 19:20:01', '0000-00-00 00:00:00'),
(7, '	Director General\nBihar Institute of Public Administration and Rural Development WALMI Complex, Phulwari Sharif Patna-801505, Bihar', 25.0961, 85.3131, 1, 2452585, '2019-07-11 19:20:31', '0000-00-00 00:00:00'),
(8, 'Director General\nChattisgarh Academy of Administration, Indrawati Khand, Mantralaya Parisar, Raipur', 21.2787, 81.8661, 1, 2221280, '2019-07-11 19:20:35', '0000-00-00 00:00:00'),
(10, 'Spl. Secretary\nDirectorate of Training UT Civil Services, Institutional Area, Vishwas Nagar, Shahadara, Delhi-110032', 28.6863, 77.2218, 1, 22304439, '2019-07-11 19:20:52', '0000-00-00 00:00:00'),
(11, '	Executive Director\nGIDM, Gujarat State Disaster Management Authority, Govt. of Gujarat, Block No.11, 5th Floor, Sector-11, Udyog Bhawan, Gandhinagar, Gujarat', 22.2587, 71.1924, 1, 23259303, '2019-07-11 19:21:09', '0000-00-00 00:00:00'),
(12, 'Director General\nHaryana Institute of Public Administration (HIPA) Complex-76, Sector-18, Gurgaon-122001, Haryana', 29.0588, 76.0856, 1, 2340413, '2019-07-11 19:21:21', '0000-00-00 00:00:00'),
(13, 'Director,\nHimachal Pradesh Institute of Public Administration, Fairlawans, Shimla-171012, Himachal Pradesh\n', 31.1048, 77.1734, 1, 2647855, '2019-07-11 19:21:38', '0000-00-00 00:00:00'),
(14, 'Director General\nJ&K Institute of Management and Public Administration and Rural Development, (IMPA), 3rd Floor, Vikas Bhawan, Rail Head Complex, Jammu - 180004\n', 33.7782, 76.5762, 1, 2472564, '2019-07-11 19:22:11', '0000-00-00 00:00:00'),
(15, '\nShri Krishna Institute of Public Administration Meurs Road, Post-Ranchi University, Ranchi-834008, Jharkhand', 23.6102, 85.2799, 1, 2283804, '2019-07-11 19:23:33', '0000-00-00 00:00:00'),
(16, '\nAdministrative Training Institute P. A. No. 2, Lalitha Mahal Road, Mysore-570011, Karnataka', 15.3173, 75.7139, 1, 2520906, '2019-07-11 19:23:21', '0000-00-00 00:00:00'),
(17, '\nInstitute of Land & Disaster Management PTP Nagar, Near Nirmithi Kendra, Trivandrum-695038, Kerala', 10.8505, 76.2711, 1, 2362885, '2019-07-11 19:23:15', '0000-00-00 00:00:00'),
(18, 'Disaster Management Institute Paryavaran prisar, E-5, Arera Colony, PB No. 563 Bhopal-462016, MP (India)', 22.9734, 78.6569, 1, 2461538, '2019-07-11 19:23:10', '0000-00-00 00:00:00'),
(19, 'Yashwant Chavan Academy of Development Administration, Raj Bhavan Complex, Baner Road, Ganeshkhind, Pune-410017, Maharashtra', 19.7515, 75.7139, 1, 25608209, '2019-07-11 19:24:13', '0000-00-00 00:00:00'),
(20, ' Relief & Disaster Management and Director, DMI\nGovt. of Manipur, Secretariat, Annexe Building, Room No.115, North Block, Imphal-795001', 23.7072, 73.5211, 1, 2440736, '2019-07-11 19:24:32', '0000-00-00 00:00:00'),
(21, 'Meghalaya Administrative Training Institute (MATI), IGP Point, Behind Addl. Secretariat Building, Shillong-793001, Meghalaya', 25.467, 91.3662, 1, 2210132, '2019-07-11 19:24:39', '0000-00-00 00:00:00'),
(22, 'Administrative Training Institute New Capital Complex, Khatla, Aizwal, Mizoram-796 001', 23.1645, 92.9376, 1, 2335830, '2019-07-11 19:25:04', '0000-00-00 00:00:00'),
(23, 'Administrative Training Institute, P. Box-162, Kimho, Kohima-797003, Nagaland', 26.1584, 94.5624, 1, 2280063, '2019-07-11 19:25:22', '0000-00-00 00:00:00'),
(24, 'Gopabandhu Academy of Administration, Chandrashekharpur, Bhubaneswar-751023, Orissa', 20.9517, 85.0985, 1, 2300743, '2019-07-11 19:25:36', '0000-00-00 00:00:00'),
(25, 'Mahatama Gandhi State Institute of Public Administration, Punjab, Sector 26, Near Sant Kabir School, Chandigarh-160019, Punjab', 31.1471, 75.3412, 1, 2792114, '2019-07-11 19:25:49', '0000-00-00 00:00:00'),
(26, 'HCM Rajasthan State Institute of Public Administration, Jawaharlal Nehru Marg, Jaipur-302017, Rajasthan', 27.0238, 74.2179, 1, 2706556, '2019-07-11 19:26:13', '0000-00-00 00:00:00'),
(27, 'G.B. Pant Institute of Himalayan Environment and Development, Sikkim Unit, Gangtok\nHQ at: Kosi Katarmal, Almora-263643 Uttarakhand (Sikkim Unit)', 27.533, 88.5122, 1, 241015, '2019-07-11 19:26:28', '0000-00-00 00:00:00'),
(28, 'DG Training (Ex Officio)\nAdministrative Training Institute, 163/1, P S Kumarasamy, Raja Salai, Greenways Road, Chennai- 600028, Tamil Nadu', 11.1271, 78.6569, 1, 24938247, '2019-07-11 19:26:33', '0000-00-00 00:00:00'),
(29, 'State Institute of Public Administration and Rural Development (SIPARD), Camper Bazar, A. D. Nagar, P. O. SD Mission, Camper Bazar, Agartalla, Tripura West-799003', 23.9408, 91.9882, 1, 2374048, '2019-07-11 19:27:03', '0000-00-00 00:00:00'),
(30, 'Uttar Pradesh Academy of Administration and Management Sector-''D'', ALIGANJ, Lucknow-226024, Uttar Pradesh', 26.8467, 80.9462, 1, 2336292, '2019-07-11 19:27:15', '0000-00-00 00:00:00'),
(31, 'Uttarakhand Academy of Administration Ardwell Camp, Mallital Nainital-263001, Uttarakhand', 30.0668, 79.0193, 1, 239114, '2019-07-11 19:27:27', '0000-00-00 00:00:00'),
(32, 'Disaster Mitigation and Management Centre, Department of Disaster Management, Uttarakhand Secretariat Rajpur Road, Dehradun-248001 Uttarakhand', 30.0668, 79.0193, 1, 2710232, '2019-07-11 19:27:39', '0000-00-00 00:00:00'),
(33, 'Administrative Training Institute, Government of West Bengal FC Block, Sector III, Salt Lake City, Kolkata-700 106', 22.9868, 87.855, 1, 23373960, '2019-07-11 19:27:42', '0000-00-00 00:00:00'),
(34, 'Ahmedabad, Gujarat, India', 23.0225, 72.5714, 0, 9898660970, '2019-07-14 11:28:46', '0000-00-00 00:00:00'),
(35, 'Sabarmati, Ahmedabad, Gujarat, India', 23.0903, 72.5856, 0, 8745454545, '2019-07-14 11:28:50', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_ngo`
--

CREATE TABLE `tb1_ngo` (
  `ngo_id` int(10) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` bigint(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(200) NOT NULL,
  `category` varchar(20) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_ngo`
--

INSERT INTO `tb1_ngo` (`ngo_id`, `name`, `phone`, `email`, `address`, `category`, `status`) VALUES
(5, 'Xyz', 9898660970, 'dfs@dga', 'saf', 'Food', 1),
(6, 'dashd', 7359809861, 'hajdshd@das', 'sdf', 'Food', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb1_notification`
--

CREATE TABLE `tb1_notification` (
  `notification_id` int(10) NOT NULL,
  `notification` varchar(20) NOT NULL,
  `status` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb1_officer`
--

CREATE TABLE `tb1_officer` (
  `officer_id` int(20) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` bigint(60) NOT NULL,
  `address` varchar(300) NOT NULL,
  `designation` varchar(30) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_officer`
--

INSERT INTO `tb1_officer` (`officer_id`, `name`, `email`, `phone`, `address`, `designation`, `status`) VALUES
(10, 'Ravina sardar', 'sardarravina@gmail.com', 8320547900, 'Sarangpur, Ahmedabad', 'Mayor', 1),
(11, 'Bhumi Sharma', 'sharmabhumi2000@gmail.com', 9898660970, 'Ahmedabad', 'Mayor, Ahmedabad', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tb1_otp`
--

CREATE TABLE `tb1_otp` (
  `otp_id` int(10) NOT NULL,
  `login_id` int(10) NOT NULL,
  `otp` int(10) NOT NULL,
  `otp_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_otp`
--

INSERT INTO `tb1_otp` (`otp_id`, `login_id`, `otp`, `otp_time`) VALUES
(1, 0, 259988, '2019-07-11 06:05:08'),
(2, 16, 259988, '2019-07-11 06:05:12'),
(3, 16, 154812, '2019-07-11 06:06:15'),
(4, 17, 908664, '2019-07-16 12:58:31'),
(5, 0, 469964, '2019-07-16 13:01:29'),
(6, 17, 469964, '2019-07-16 13:01:32'),
(7, 0, 747534, '2019-07-16 13:02:27'),
(8, 17, 747534, '2019-07-16 13:02:31'),
(9, 0, 518331, '2019-07-16 13:03:46'),
(10, 17, 518331, '2019-07-16 13:03:50'),
(11, 16, 506971, '2019-07-16 16:36:46');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_people`
--

CREATE TABLE `tb1_people` (
  `people_id` int(10) NOT NULL,
  `login_id` int(50) NOT NULL,
  `name` varchar(20) NOT NULL,
  `address` varchar(50) NOT NULL,
  `age` int(10) NOT NULL,
  `mobile` bigint(20) NOT NULL,
  `image` varchar(50) NOT NULL,
  `type` int(10) NOT NULL,
  `active` int(10) NOT NULL,
  `found` int(10) NOT NULL,
  `lost_on` timestamp NULL DEFAULT NULL,
  `found_on` timestamp NULL DEFAULT NULL,
  `created_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb1_people`
--

INSERT INTO `tb1_people` (`people_id`, `login_id`, `name`, `address`, `age`, `mobile`, `image`, `type`, `active`, `found`, `lost_on`, `found_on`, `created_on`, `updated_on`) VALUES
(27, 17, 'Khushi', 'Dehradhun', 18, 9745632101, '../photos/23.jpg', 1, 1, 0, '2019-07-10 18:30:00', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 17, 'Ishu', 'Shimla', 18, 7410321245, '../photos/23.jpg', 1, 1, 0, '2019-07-12 18:30:00', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 17, 'Sneha', 'Ahmedabad', 22, 7845413214, '../photos/IMG_20171014_172113284.jpg', 2, 1, 0, '2019-07-01 18:30:00', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 17, 'Sweta', 'Gandhinagar', 20, 9854544544, '../photos/IMG20170627174603.jpg', 2, 1, 0, '2019-07-04 18:30:00', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 17, 'Mayra', 'Banglore', 5, 7845124545, '../photos/2014-07-01-003.jpg', 2, 1, 1, '2019-07-08 18:30:00', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 17, 'user', 'Kerala', 18, 9898660970, '../photos/23.jpg', 1, 0, 0, '2019-07-15 18:30:00', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 17, 'User', 'Ahmedabad', 18, 9898660970, '../photos/23.jpg', 1, 1, 0, '2019-07-06 18:30:00', NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `tb1_tip`
--

CREATE TABLE `tb1_tip` (
  `tip_id` int(10) NOT NULL,
  `tip` varchar(50) NOT NULL,
  `status` int(10) NOT NULL,
  `created_on` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_on` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `addcheck`
--
ALTER TABLE `addcheck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `graph`
--
ALTER TABLE `graph`
  ADD PRIMARY KEY (`g_id`);

--
-- Indexes for table `tb1_alert`
--
ALTER TABLE `tb1_alert`
  ADD PRIMARY KEY (`alert_id`);

--
-- Indexes for table `tb1_blog`
--
ALTER TABLE `tb1_blog`
  ADD PRIMARY KEY (`blog_id`);

--
-- Indexes for table `tb1_chart`
--
ALTER TABLE `tb1_chart`
  ADD PRIMARY KEY (`chart_id`);

--
-- Indexes for table `tb1_checklist`
--
ALTER TABLE `tb1_checklist`
  ADD PRIMARY KEY (`check_id`);

--
-- Indexes for table `tb1_currentdisaster`
--
ALTER TABLE `tb1_currentdisaster`
  ADD PRIMARY KEY (`disaster_id`);

--
-- Indexes for table `tb1_detail`
--
ALTER TABLE `tb1_detail`
  ADD PRIMARY KEY (`detail_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `tb1_disaster`
--
ALTER TABLE `tb1_disaster`
  ADD PRIMARY KEY (`disaster_id`);

--
-- Indexes for table `tb1_fund`
--
ALTER TABLE `tb1_fund`
  ADD PRIMARY KEY (`fund_id`);

--
-- Indexes for table `tb1_incidence`
--
ALTER TABLE `tb1_incidence`
  ADD PRIMARY KEY (`incidence_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `tb1_info`
--
ALTER TABLE `tb1_info`
  ADD PRIMARY KEY (`info_id`);

--
-- Indexes for table `tb1_login`
--
ALTER TABLE `tb1_login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `tb1_map`
--
ALTER TABLE `tb1_map`
  ADD PRIMARY KEY (`map_id`);

--
-- Indexes for table `tb1_ngo`
--
ALTER TABLE `tb1_ngo`
  ADD PRIMARY KEY (`ngo_id`);

--
-- Indexes for table `tb1_notification`
--
ALTER TABLE `tb1_notification`
  ADD PRIMARY KEY (`notification_id`);

--
-- Indexes for table `tb1_officer`
--
ALTER TABLE `tb1_officer`
  ADD PRIMARY KEY (`officer_id`);

--
-- Indexes for table `tb1_otp`
--
ALTER TABLE `tb1_otp`
  ADD PRIMARY KEY (`otp_id`);

--
-- Indexes for table `tb1_people`
--
ALTER TABLE `tb1_people`
  ADD PRIMARY KEY (`people_id`),
  ADD KEY `login_id` (`login_id`);

--
-- Indexes for table `tb1_tip`
--
ALTER TABLE `tb1_tip`
  ADD PRIMARY KEY (`tip_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `addcheck`
--
ALTER TABLE `addcheck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `graph`
--
ALTER TABLE `graph`
  MODIFY `g_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `tb1_alert`
--
ALTER TABLE `tb1_alert`
  MODIFY `alert_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb1_blog`
--
ALTER TABLE `tb1_blog`
  MODIFY `blog_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
--
-- AUTO_INCREMENT for table `tb1_chart`
--
ALTER TABLE `tb1_chart`
  MODIFY `chart_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb1_checklist`
--
ALTER TABLE `tb1_checklist`
  MODIFY `check_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb1_currentdisaster`
--
ALTER TABLE `tb1_currentdisaster`
  MODIFY `disaster_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tb1_detail`
--
ALTER TABLE `tb1_detail`
  MODIFY `detail_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;
--
-- AUTO_INCREMENT for table `tb1_disaster`
--
ALTER TABLE `tb1_disaster`
  MODIFY `disaster_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
--
-- AUTO_INCREMENT for table `tb1_fund`
--
ALTER TABLE `tb1_fund`
  MODIFY `fund_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb1_incidence`
--
ALTER TABLE `tb1_incidence`
  MODIFY `incidence_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tb1_info`
--
ALTER TABLE `tb1_info`
  MODIFY `info_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- AUTO_INCREMENT for table `tb1_login`
--
ALTER TABLE `tb1_login`
  MODIFY `login_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=70;
--
-- AUTO_INCREMENT for table `tb1_map`
--
ALTER TABLE `tb1_map`
  MODIFY `map_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
--
-- AUTO_INCREMENT for table `tb1_ngo`
--
ALTER TABLE `tb1_ngo`
  MODIFY `ngo_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `tb1_notification`
--
ALTER TABLE `tb1_notification`
  MODIFY `notification_id` int(10) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tb1_officer`
--
ALTER TABLE `tb1_officer`
  MODIFY `officer_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb1_otp`
--
ALTER TABLE `tb1_otp`
  MODIFY `otp_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `tb1_people`
--
ALTER TABLE `tb1_people`
  MODIFY `people_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
--
-- AUTO_INCREMENT for table `tb1_tip`
--
ALTER TABLE `tb1_tip`
  MODIFY `tip_id` int(10) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
