<?php
//$problemlist = [];
$problemlist = array();
$subproblemlist = array();
$uparrow = "&uarr;";
$downarrow = "&darr;";
$rightarrow = "&rarr;";

//This is also defined in functions.js.  If you change it here you have to change it there.
abstract class ProblemType {
	const multiplechoice = 0;
	const calculation = 1;
	const lesson = 2;
}

function CreateMultipleChoice ($name, $problemtype, $imgsrc, $problemtext, $problemanswer, $problemchoices, $attemptonefeedbackimgsrc, $attemptonefeedback, $problemexplanationimgsrc, $problemexplanation) {
	$problem = array();
	$problem['name'] = $name;
	$problem['problemtype'] = $problemtype;
	$problem['imgsrc'] = $imgsrc;
	$problem['problemtext'] = $problemtext;
	$problem['problemanswer'] = $problemanswer;
	$problem['problemchoices'] = $problemchoices;
	$problem['attemptonefeedback'] = $attemptonefeedback;
	$problem['attemptonefeedbackimgsrc'] = $attemptonefeedbackimgsrc;
	$problem['problemexplanation'] = $problemexplanation;
	$problem['problemexplanationimgsrc'] = $problemexplanationimgsrc;
	return $problem;
}

function CreateCalculation ($name, $problemtype, $imgsrc, $problemtext, $problemanswer, $problemtolerance, $attemptonefeedbackimgsrc, $attemptonefeedback, $problemexplanationimgsrc, $problemexplanation) {
	$problem = array();
	$problem['name'] = $name;
	$problem['problemtype'] = $problemtype;
	$problem['imgsrc'] = $imgsrc;
	$problem['problemtext'] = $problemtext;
	$problem['problemanswer'] = $problemanswer;
	$problem['problemtolerance'] = $problemtolerance;
	$problem['attemptonefeedback'] = $attemptonefeedback;
	$problem['attemptonefeedbackimgsrc'] = $attemptonefeedbackimgsrc;
	$problem['problemexplanation'] = $problemexplanation;
	$problem['problemexplanationimgsrc'] = $problemexplanationimgsrc;
	return $problem;
}

function CreateLesson ($name, $problemtype, $imgsrc, $lessontext) {
	$problem = array();
	$problem['name'] = $name;
	$problem['problemtype'] = $problemtype;
	$problem['imgsrc'] = $imgsrc;
	$problem['lessontext'] = $lessontext;
	return $problem;
}
//Begin section 1
$ProblemName = '1. Introduction';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/cardiac_ap_and_currents.png";
$LessonText = "<p>Many different ionic channels/currents underlie the cardiac action 
potential.  Here we will be primarily concerned with currents during the plateau and 
repolarization phases of the ventricular action potential.   It is important to recognize that 
the membrane permeabilities/currents during these phases of the cardiac action potential are 
only somewhat greater than those which occur when the membrane is at rest.  The currents during 
the plateau and repolarization phases of the cardiac action potential are delicately balanced 
to produce the normal action potential waveform.  Small changes in any of these currents can 
have large effects on the shape and duration of the action potential.  This can be used to 
advantage in the case of drugs used to treat some diseases of the heart and cardiovascular 
system, but it can have very adverse effects in certain diseases that upset this delicate 
balance.</p>
<p>Normal ionic currents at rest and during the action potential in ventricular myocytes are 
shown in the figure above.  The situation represented here is for a resting individual.  
Atrial myocytes display similar currents, although the action potential is shorter in duration.  
Only those currents that are most important to this workshop are shown.  The Na+ current is 
illustrated at about 1/50th of its true amplitude relative to the other currents; all other 
currents are drawn approximately to scale. Note that:  I<sub>Na</sub> = Na current,  
I<sub>Ca,L</sub> = L type Ca current,  I<sub>to1</sub> = transient outward K current, 
I<sub>Na/Ca</sub> = current due to Na/Ca exchanger, I<sub>Ks</sub> = slow delayed rectifier K 
current, I<sub>Kr</sub> = ‘rapid’ delayed rectifier K current, I<sub>Cl,cAMP</sub> = current 
through cAMP dependent Cl channels. </p>";
$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = '1. Heart';
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/cardiac_ap_and_currents.png";
$LessonText = "<p><b>Explanation of the Shape of the Action Potential</b></p>
<p>On the basis of the currents shown in the figure above the events which shape the ventricular action 
potential are:</p>
<ol>
<li> The rapid upstroke (phase 0) of the AP in a ventricular myocyte is caused by the 
activation of numerous Na channels, producing a strong inward (depolarizing) current and 
moving the membrane potential toward E<sub>Na</sub>
<li> Phase 1 early partial repolarization is primarily caused by the rapid inactivation of 
Na channels and the activation of transient outward K channels. The brief outward current from 
the Na/Ca exchanger (which occurs when the membrane is strongly depolarized actually causing 
the Na/Ca exchange to reverse direction) also contributes.<sup>*</sup>  These outward currents 
are opposed primarily by the activation of L-type Ca channels, which produce an inward current 
that opposes repolarization. The result is that the action potential enters its plateau phase, 
beginning at about +10 mV.
<li> During the plateau (phase 2), inward and outward currents are closely balanced and the 
membrane potential declines very gradually.
<li> During the end of the plateau and the start of phase 3 (‘rapid’ repolarization), the 
close balance between inward and outward currents shifts such that outward (hyperpolarizing) 
currents more and more exceed inward (depolarizing currents). This results primarily from the 
slow activation of I<sub>Ks</sub>
  and the inactivation and deactivation of L-type Ca channels.
<li> During most of phase 4 the net ionic current is zero – if this was not the case then the 
membrane potential could not be constant at the resting potential level (about –90 mV).
  </ol>
<sup>*</sup> Note that this figure is generated by a mathematical model and there is no actual 
proof that this reversal happens.  You therefore are not responsible for knowing it or the explanation for it.  I 
include the explanation here just so you know why the current appears to reverse on the graph.";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End section 1

//Begin section 2
$ProblemName = "2.  AP Shortening During Exercise";
$ProblemType = ProblemType::calculation;
$ImgSrc = "./images/resting and exercise APs.png";
$ProblemText = '<p>Sympathetic nervous system activity (as occurs during exercise, stress or emotional 
excitement) causes changes in the rate and duration of the action potential throughout 
the heart; this is brought about by effects on several of the channel types shown in the 
previous figure.  The figure above compares ventricular action potentials at rest (heart 
rate &asymp; 70 beats/min) and during very intense physical exercise (heart rate &asymp; 
180 beats/min, which is about the maximum possible).
</p>
<ol>
  <li>Approximate duration of the action potential at rest and during very intense exercise in 
the figure above.
  <li>Now approximate duration of the period between action potentials in the two situations (
i.e. from complete repolaization to the beginning of the next depolarization).
  <li> What would the time between action potentials have been during intense exercise if the 
action potential duration had not decreased?  <b>Enter you answer on the upper right and Evaluate.</b>.</ol>';
$ProblemAnswer = '50';
$ProblemTolerance = '20';
$AttmeptOne = "<p><b>Sorry.  That's incorrect.</b></p>  <p>The duration is measured from the upstoke (phase 0) to complete  repolarization 
(the end of phase 3).</p>
<p>At rest: 290 msec </br>
  Exercise: 180 msec</p>
<p>The approximate duration of the period between action potentials in the two situations:
<p>Answer:</br>
  At rest: 570 msec </br>
  Exercise: 160 msec</p>
<p>Take the total cycle length of the exercise action potential (time phase 0 of the current 
action potential to phase 0 of the next action potential) and 
subtract the action potential duration of the resting action potential.  How much time is left?</p>";
$AttmeptOneImgSrc = "./images/resting and exercise APs.png";
$ExplanationImgSrc = "./images/resting and exercise APs.png";
$Explanation = "<p>The duration is measured from the upstoke (phase 0) to complete 
repolarization (the end of phase 3).</p>
<p>At rest: 290 msec </br>
  Exercise: 180 msec</p>
<p>The approximate duration of the period between action potentials in the two situations:
<p>Answer:</br>
  At rest: 570 msec </br>
  Exercise: 160 msec</p>
<p>The cycle length during exercise (phase 0 of the current action potential to phase 0 of the next action potential) is:</p>
  <p>180 + 160 ms = 340 ms</p>
<p>Without the shortening of the action potential, the interval between action potentials during exercise would have fallen to less than the 160 ms because of this longer duration:</p>
<p>340 ms - 290 ms = 50 ms</p>
<p>Therefore the period between action potentials would have only been about 50 msec.  This is an extremely short time.</p>";

$NewProblem = CreateCalculation($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemTolerance, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = "2.  AP Shortening During Exercise";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/AP spread.png";
$LessonText = "<p>Note the figure above.  The action potential begins to depolarize the 
septum at 160 ms (0.16 sec).  It spreads down the septum along the endocardium, then spreads 
outward through the ventricular wall, finally completely depolarizing the ventricle 
at 200 ms. It therefore takes about 60 ms for the action potential just to spread throughout 
the ventricle, more than the 50 ms between action potentials that there would be if the action 
potential did not shorten.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = "2.  AP Shortening During Exercise";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/repolarization.png";
$LessonText = "<p>Now consider that the heart needs time to repolarize in order for the 
tissue to recover and become non-refractory.  It is easy to see that without 
shortening the action potential duration, 50 msec would not be enough time to allow the heart
 to function.    Indeed, the normal QT interval (time from depolarization of the ventricle to 
complete repolarization) at rest is typically slightly more than 400 msec.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = "2.  AP Shortening During Exercise";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/Wiggers Filling.png";
$LessonText = "<p>In addition, 50 msec would not have allowed enough time for the 
ventricles to fill with blood (particularly when it is considered that contraction somewhat 
outlasts the cardiac action potential and that action potentials do not occur simultaneously 
throughout the entire ventricle).  See the highlighted portion of the figure above.</p>  
<p>In the actual situation the shortening of diastole is still greater than that of systole 
when heart rate increases. However, lest you think a little exercise will kill you, note that 
both ventricular filling and ejection go through rapid and reduced phases. Most filling occurs 
during the initial, rapid phase immediately after the AV valve opens. Thus the filling of 
the ventricles is not as compromised as might be expected during normal exercise with a h
ealthy heart; only when heart rate exceeds about 120-140 beats/min does ventricle filling 
and stroke volume begin to decrease. Also note that with intense sympathetic stimulation 
the contraction of the atria becomes more important to ventricular filling.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);


array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End section 2

//Begin section 3
$ProblemName = '3. E<sub>Cl</sub> During Exercise';
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/resting and exercise APs.png";
$ProblemText = "<p>Calculate the fraction of the time is the membrane undergoing an action potential in these two situations.  
What do you think this will do to the Nerst potential for Cl<sup>-</sup> during exercise?
</p>
<p>A.  Increase  (i.e. become less negative)</br>
B. Decrease (become more negative)</p></p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'A';
$ProblemChoices = 'AB';
$AttmeptOne = "<p><b>Sorry, that's incorrect.</b></p> 
<p>At rest:</p>
<p>Duration of depolarization (plateau phase)/Total Duration = 290/(290+570) = 0.34</p>
<p>Exercise:</p>
<p>Duration of depolarization/Total Duration = 180/(180+160) = 0.53</p>
<p>In cells that spend the vast majority of their time at rest (e.g. nerve and skeletal 
muscle) the Nernst Potential for Cl<sup>-</sup> is equal to the resting ptoential.  
In heart, because thecell spends a great deal of time depolarized (i.e in the plateau phase), 
the Cl<sup>-</sup> equilibrium potential is well approximated by the average 
membrane potential over the cardiac cycle.  Assuming that the extremely elevated heart rate 
has been sustained long enough for Cl<sup>-</sup> concentration to reach a new steady state, 
what would happen to the E<sub>Cl</sub> if the cell spent more time depolarized during exercize?</p>";
$AttmeptOneImgSrc = "./images/resting and exercise APs.png";
$ExplanationImgSrc = "./images/resting and exercise APs.png";
$Explanation = "<p>At rest:</p>
<p>Duration of depolarization (plateau phase)/Total Duration = 290/(290+570) = 0.34</p>
<p>Exercise:</p>
<p>Duration of depolarization/Total Duration = 180/(180+160) = 0.53</p>
<p>In cells that spend the vast majority of their time at rest (e.g. nerve and skeletal 
muscle) the Nernst Potential for Cl<sup>-</sup> is equal to the resting ptoential.  
In heart, because thecell spends a great deal of time depolarized (i.e in the plateau phase), 
the Cl<sup>-</sup> equilibrium potential is well approximated by the average 
membrane potential over the cardiac cycle.  Assuming that the extremely elevated heart rate 
has been sustained long enough for Cl<sup>-</sup> concentration to reach a new steady state, 
we can approximate the E<sub>Cl</sub>.</p>
<p>Assuming that the average potential during the action potential is +10 mV in both cases, 
and remembering that the resting potential is –90 mV, then the average potential during one 
cardiac cycle is easily estimated as:</p>
<p>Average Vm = (fraction of time of AP) x (+10 mV) + (fraction of time at rest) x ( –90 mV)</p>
<p>At rest: 0.34 x +10mV + 0.66 x –90 mV = –56 mV</br>
Exercise: 0.53 x +10mV + 0.47 x –90 mV = –37 mV</p>
<p>These values approximate E<sub>Cl</sub>.  The heart is unusual in this regard since it 
spends so much of its time undergoing action potentials. Most excitable cells spend only a 
very small fraction of their time producing action potentials (remember that nerve and 
skeletal muscle action potentials are only about 1 msec in duration), so E<sub>Cl</sub> is 
usually very near the resting potential.  Because of this, Cl channels in other cells have 
very little effect upon the resting potential.  However, in heart cells, open Cl channels 
tend to “pull” the resting potential up.  This pull becomes greater during exercise because 
the equilibrium potential rises.  This, in addition to other factors, might lead the resting 
potential to become high enough to attain threshold and inappropriate depolarization of the 
sarcolemmal membrane (called “delayed afterdepolarizations”) may result.  These may lead to 
arrythmias in the diseased heart.</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End section 3

//Begin section 4
$ProblemName = "4.  L-type Ca Current During the AP";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/Ca Channel Voltage Dependence.png";
$LessonText = "<p>L-type Ca<sup>2+</sup> channels begin to activate when the membrane potential 
becomes less negative than about –35 to –30 mV.  The probability that their activation gates 
are open as a function of membrane potential is shown in Figure A (this is shown as the 
fraction of activation gates open relative to the maximum).  The inactivation of these 
channels is quite slow, requiring several hundred msec to be complete.  The probability that 
inactivation gates are open as a function of membrane potential is also shown in Figure A.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = "4.  L-type Ca Current During the AP";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/Ca Channel Voltage Dependence 0 mV.png";
$LessonText = "<p>The curves shown in Figure A represent the probability that the gate 
will be open in any one channel at steady-state.  That is, it represents the situation if the 
membrane voltage is held at a given value for a very long period of time.</p>
<p>Beacuse activation gates open (\"activate\") and close (\"deactivate\") extremely quickly, 
we may assume that during the 
action potential, when the voltage is changing, we can use Figure A to detemine what fraction 
of the channels is open at any given voltage.  For instance, at 0 mV we see that the fraction 
of open channels is roughly 0.58 (dashed line).  That means that during the action potential 
in Figure B, when the membrane voltage is a 0 mV, roughly 58% of the L-type Ca channel 
activation gates are open (green dashed line).</p>
<p>This is NOT true of inactivtion gates because they open and close relatively slowly as 
voltage changes.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = "4.  L-type Ca Current During the AP";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/Ca Channel Voltage Dependence 0 mV Time Course.png";
$LessonText = "<p>The <i>time course</i> of L-type Ca inactivation is illustrated in the 
bottom panel of Figure B.  Inactivation as a function of time is shown continuing beyond the 
end of the action potential (black dashed line) to illustrate what would happen if the action 
potential had remained for a longer time at a depolarized potential.  In addition, recovery 
from inactivation begins as soon as the membrane potential becomes more negative than about 
0 mV.  However, this recovery is NOT instantaneous and becomes more rapid as the membrane 
potential becomes more negative.  Figure B also shows the approximate time course of recovery 
from inactivation of L-type Ca channels for the action potential waveform illustrated.</p>
<p>Consider the green dashed line in Figure B at the point in the action potential time course 
where the membrane voltage is 0 mV (top).  The dashed line extends down into the time course of the 
change in the state of the inactivation gates as the action potential progresses in the bottom panel.  
We see that because the membrane voltage is depolarized, the inactivation gates are slowly closing.  At 
0 mV the fraction of the inactivation gates that is still open is only 0.52 (the green dashed line).</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = "4.  L-type Ca Current During the AP";
$ProblemType = ProblemType::calculation;
$ImgSrc = "./images/Ca Channel Voltage Dependence 0 mV Time Course.png";
$ProblemText = '<p>Near the end of the ventricular action potential (when inactivation is maximum) about what 
percentage of the Ca channels have inactivated?</p>';
$ProblemAnswer = '70';
$ProblemTolerance = '10';
$AttmeptOne = "<p><b>Sorry.  That's incorrect.</b></p>  
<p>The maximum number of channels are inactivated (i.e. with close inactivation gates) 
at the lowest point on the curve in 
the bottom panel of Figure B.</p>";
$AttmeptOneImgSrc = "./images/Ca Channel Voltage Dependence 0 mV Time Course.png";
$ExplanationImgSrc = "./images/Ca Channel Voltage Dependence 0 mV Time Course.png";
$Explanation = "<p>From Figure B, this can be estimated to be about 70%.  About 30% (0.3) of 
the gates are still open at this point. The channels that have not inactivated are still 
available to produce significant effects on membrane potential under abnormal circumstances 
(see Long QT syndrome later in the program).</p>";

$NewProblem = CreateCalculation($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemTolerance, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = "4.  L-type Ca Current During the AP";
$ProblemType = ProblemType::calculation;
$ImgSrc = "./images/Ca Channel Voltage Dependence 0 mV Time Course.png";
$ProblemText = "<p>
Given the curve showing activation as a function of membrane potential (Figure A) 
and the time course of inactivation shown in Figure B (bottom), <b>predict the percentage of open 
L-type Ca channels during the ventricular action potential at 0 mV during the plateau 
phase</b>.</p>  
<p>Note that activation and deactivation (activation gate opening and closing, respectivly) is 
not actually instantaneous at these potentials but it is extremely fst and for simplicity 
we will assume that the L-type Ca 
activation gate instantaneously moves as a function of Vm according to the relationship shown 
in Figure A as we did earlier in the lesson.</p> 
<p>Figure B (bottom) also shows the approximate time course of recovery from inactivation of 
L-type Ca channels for the action potential waveform illustrated as before.</p>
<p><b>Hint</b>:  The <u>product</u> of the probability that a channel’s activation gate is open and 
the probability that its inactivation gate is open is the overall probability that the channel 
is open (since both gates must be open simultaneously for ions to cross the membrane through 
the channel).";
$ProblemAnswer = '30';
$ProblemTolerance = '10';
$AttmeptOne = "<p><b>Nope</b></p>  
<p>In Figure A we have the fraction of open activation gates at 0 mV, 0.58 (blue).  
In Figure B we have the percentage of open inactivation gates, 0.52 (green).  The 
<u>product</u> of the probability that a channel’s activation gate is open and 
the probability that its inactivation gate is open is the overall probability that the channel 
is open (since both gates must be open simultaneously for ions to cross the membrane through 
the channel).</p>";
$AttmeptOneImgSrc = "./images/Ca Channel Voltage Dependence 0 mV Time Course.png";
$ExplanationImgSrc = "./images/Ca Channel Voltage Dependence 0 mV Time Course.png";
$Explanation = "<p>The product of the probability that a channel’s activation gate is open and 
the probability that its inactivation gate is open is the overall probability that the channel 
is open (since both gates must be open simultaneously for ions to cross the membrane through 
the channel). The probability that the activation gate is open as a function of time can be 
plotted using the information in Figure A. Figure B shows the probability that inactivation 
gates will be open (lower panel).  When both gates are open, current flows.</p>
<p>To illustrate exactly what is going on here, let us examine the figures in detail by 
evaluating the relevant parameters for the action potential at 0 mV.  At 0 mV the open 
probability of the activation gate is 0.58 (Figure A, blue dashed line).  Note that the 
opening and closing of the gate is very fast.  However because the inactivation gate is much 
slower, the time course of the current must be considered (Figure B, green dashed ine).  The 
open probability of the  inactivation gate at 0 mV on the action potential curve (at about 140 ms) 
is about 0.52 (gray dashed line).  The probability that the channel will be open (i.e. when 
both gates are open) is:</p>
<p>0.58 X 0.52 = 0.30</p>
<p>or <b>30%</b></p>";

$NewProblem = CreateCalculation($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemTolerance, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End section 4

//Begin section 5
$ProblemName = "5.  Inward and Outward Currents During the AP";
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/cardiac_ap_and_currents.png"; 
$ProblemText = "<p>
The direction of the current across a membrane can be either \"inward\" (positive charge going into the cell) 
or outward (positive charge going out)</p>
<p>What is the direction (inward or outward) of the net ionic current during phase 0 of the ventricular action potential?
<p>A.  Inward </br>
B. Outward</p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'A';
$ProblemChoices = 'AB';
$AttmeptOne = "<p><b>Sorry, that's incorrect.</b></p>
<p>The direction of the current across a membrane is \"inward\" if positive charge going into the cell 
and \"outward\" if positive charge is going out.  Which direction will the membrane voltage go is positive charge is 
going into the cell?  How about out of the cell?  Which direction is voltage moving during phase 0?</p>"; 
$AttmeptOneImgSrc = "./images/cardiac_ap_and_currents.png";
$ExplanationImgSrc = "./images/cardiac_ap_and_currents.png";
$Explanation = "<p>Phase 0: Inward.</p>
<p>The membrane is depolarizing as positive ions (Na<sup>+</sup>) rush into the cell making 
the inside more positive and raising the membrane potential.  The net current is <i>inward</i>.</p>
<p>Phases 1-3: Outward.  The membrane is repolarizing as (mostly) positive K<sup>+</sup> ions 
move out of the cell.  The net current is outward. 
<p>Phase 4: No net ionic current.  The membrane potential is constant, very close to the 
equilibrium potential for K. There is no net current.</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = "5.  Inward and Outward Currents During the AP";
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/cardiac_ap_and_currents.png"; 
$ProblemText = "<p>During which of the phases 1-3 of the ventricular action 
potential is the outward current the least?
<p>A.  Phase 1 </br>
B. Phase 2</br>
C. Phase 3</p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'B';
$ProblemChoices = 'ABC';
$AttmeptOne = "<p><b>Sorry, that's incorrect.</b></p>
<p>The direction of the current across a membrane is \"outward\" if positive charge is 
going out.  The faster it goes out, the faster the membrane voltage changes.  During which phase (1, 2 or 3) 
is the membrane voltage changing the least?
</p>"; 
$AttmeptOneImgSrc = "./images/cardiac_ap_and_currents.png";
$ExplanationImgSrc = "./images/inward and outward ap currents.png";
$Explanation = "<p>Phase 2 (the plateau).  Large currents cause the membrane potential to 
change rapidly.  The figure above shows typical net ionic current during the action potential 
of a ventricular myocyte on the right. In phase 0, Na and Ca rush into the cell at a very high 
rate, driving the membrane potential toward their positive reversal potentials extremely rapidly.
   As these channels close or inactivate, K channels gradually open.  This causes the fall in 
voltage in phases 1-3.  The net current is the lowest when the membrane potential is changing 
the least (i.e. during the plateau).</p>
<p>As you will see below, because there is very little net current flowing during the plateau 
phase of the action potential, it is very easy to disrupt the balance of inward and outward currents 
during this phase, thus lengthening or shortening it.</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);


array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End section 5

//Begin section 6
$ProblemName = "6.  AP Currents During Exercise";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/adrenergic effects.png";
$LessonText = "<p>During exercise or emotional stress, sympathetic activity to the 
heart is increased and parasympathetic activity is decreased.  The channels/currents affected 
by this are listed in the table above.</p>
<p>\"Facilitated\" means that the channels open 
more easily (and sometimes more rapidly) and that their open probability increases; thus the 
amplitude of the current through them is increased (we will assume that this increase will be 
in the range of 1.5x to 4x).  \"Inhibited\" means that the channels are less likely to open so 
that the amplitude of their current is decreased.</p>  
<p>In the case of facilitation of delayed 
rectifier K<sup>+</sup> channels, it is believed that I<sub>Kr</sub> is not significantly 
affected by sympathetic stimulation, so the major (perhaps only) effect is the facilitation of 
I<sub>Ks</sub>.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = "6.  AP Currents During Exercise";
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/adrenergic effects.png"; 
$ProblemText = "<p>You already know that sympathetic stimulation causes the 
duration of the ventricular action potential to decrease.  During the late portions of the 
plateau and during phase 3 repolarization what does this indicate about the relative 
facilitation of the ionic currents involved?  More specifically, which current amplitude is 
increased more: inward current or outward current?</p>
<p>A.  Inward</br>
B.  Outward</p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'B';
$ProblemChoices = 'AB';
$AttmeptOne = "<p><b>No.</b></p>
<p>In order for the plateau phase to shorten, the action potential must repolarize faster.  
Which type of current is more likely to do this?  Outward:  more positive charge leaving the cell 
or Inward:  more positive charge entering the cell?</p>";
$AttmeptOneImgSrc = "./images/adrenergic effects.png";
$ExplanationImgSrc = "./images/adrenergic effects.png";
$Explanation = "<p>Outward current must increase more than inward current since the membrane 
repolarizes more rapidly.</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = "6.  AP Currents During Exercise";
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/adrenergic effects.png"; 
$ProblemText = "<p>Facilitation of which of the ionic currents listed above are most 
responsible for the shortening of the action potential in ventricular myocytes?</p>
<p>A.  L-type Ca Channel</br>
B.  I<sub>Ks</sub><br />
C.  I<sub>f</sub><br />
D.  I</sub>K,ACh</sub></p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'B';
$ProblemChoices = 'ABCD';
$AttmeptOne = "<p><b>Nope.</b></p>
<p>Which of the channels is both found in ventricular myocytes and an outward current?</p>";
$AttmeptOneImgSrc = "./images/adrenergic effects.png";
$ExplanationImgSrc = "./images/adrenergic effects.png";
$Explanation = "<p>The answer is I<sub>Ks</sub> and I<sub>Cl,cAMP</sub>. But note that the change 
in E<sub>Cl</sub> to less negative potentials means that I<sub>Cl,cAMP</sub> will switch from 
outward (hyperpolarizing) to inward (depolarizing) during the later stages of phase 3 
repolarization (see previous Figures with the currents during the action potential).</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = "6.  AP Currents During Exercise";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/exercise ap currents.png";
$LessonText = "<p>The figure above shows the action potential and some associated 
currents of a ventricular myocyte for a resting individual (dashed lines) and the action 
potential and ionic currents with greatly increased sympathetic stimulation of the myocyte 
(solid lines). Na<sup>+</sup> current is not shown since we are primarily concerned with the plateau and 
repolarization phases of the action potential.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End section 6

//Begin section 7
$ProblemName = "7.  The Long QT AP";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/torsade de pointes.png";
$LessonText = "<p>Congenital Long QT Syndrome (LQTS) is characterized by prolonged 
cardiac action potentials (hence the long QT interval – defined as the period from the start of 
the QRS complex to the end of the T wave), T wave abnormalities in the ECG, recurrent syncope, 
and sudden death (most commonly during exercise or stress).  Long QT syndrome can also be acquired 
due to the effects of various drugs, but in this exercise we will only consider hereditary forms of 
this syndrome.</p>
<p>Syncope (loss of consciousness) and sudden death are the result of a severe cardiac arrhythmia 
called <i>torsade de pointes</i> (English: twisting of points) associated with the characteristic 
ECG pattern shown above.  Syncope results from situations in which this condition is brief and 
self-correcting.    Sudden death results when this condition persists and leads to ventricular 
fibrillation.  The mortality rate of UNTREATED symptomatic patients with long QT syndrome is 20% 
in the year following the first syncope episode and about 50% within 10 years.  With appropriate 
therapy this can be reduced to about 3% over 5 years.</p>
This portion of the exercise will explore 
the underlying changes in ionic currents responsible for the prolongation of the ventricular action 
potential and some possible reasons for the association of syncope and sudden death with exercise 
and stress – both of which activate the sympathetic nervous system.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = "7.  The Long QT AP";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/torsade de pointes.png";
$LessonText = "<p>There are many different kinds of Long QT syndrome and 
a number of these are very well understood at the molecular/genetic level.  Among them are LQTS1, LQTS2 and LQTS3.  
LQTS1 and LQTS2 result from mutations in the genes encoding voltage-gated delayed-rectifier K<sup>+</sup> 
channels in the heart.  LQTS3 results from mutations in the genes encoding cardiac voltage-gated Na<sup>+</sup> 
channels.  Other forms of the disease will not be considered in this exercise.</p>
<p>About 70-80% of all cases of inherited long QT syndrome result from mutations of the genes encoding 
two types of delayed rectifier K<sup>+</sup> channels.  Many of these result from mutations affecting 
I<sub>Ks</sub> (LQTS1); others result from mutations affecting I<sub>Kr</sub> (LQTS2).  Less than 20% 
result from mutations in the genes encoding cardiac Na<sup>+</sup> channels (LQTS3).  In the case of 
LQTS1 the number of functional I<sub>Ks</sub> channels is greatly reduced; for LQTS2 the number of 
functional I<sub>Kr</sub> channels is greatly reduced.  For LQTS3, defective Na<sup>+</sup> channels 
fail to completely inactivate, leading to a persistent inward current through these channels.</p>
<p>All of these mutations lead to prolongation of the cardiac action potential.  In fact, the QT 
interval can be as much as about 0.62 seconds (normal range 0.36-0.48 seconds), although QT 
intervals greater than 0.46 second are considered to be evidence for the presence of this disorder.  
Here we will focus primarily on LQTS1, and consider a few aspect of LTQS3.</p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = "7.  The Long QT AP";
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/cardiac_ap_and_currents.png";
$ProblemText = "<p>Why will large reductions in I<sub>Ks</sub> (LQTS1) result in prolongation of the 
cardiac action potential of ventricular myocytes?</p>
<p>A.  Decreased outward current during phase 0 of the action potential</br>
B.  Decreased outward current during phase 2 of the action potential</br>
C.  Increased inward current during phase 1 of the action potential</br>
D.  Increased inward current during phase 3 of the action potential</p>
<p>Assume that I<sub>Ks</sub> has been reduced to about 25% of its normal amplitude. You may want to refer 
to the figure above to answer this question.  Note that I<sub>Ks</sub> channels activate very slowly when the 
membrane is depolarized, and would require 1 second or more to fully activate following the start of a sustained 
membrane depolarization – this is cut short by membrane repolarization.  However, if the action potential is prolonged, 
the current through these channels will continue to increase until the membrane potential becomes more negative than 
about –40 or –50 mV.</p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'B';
$ProblemChoices = 'ABCD';
$AttmeptOne = "<p><b>That's incorrect.</b></p>
<p>Outward current is when positive charge leaves the cell.  Inward current is when positive charge 
enters the cell.  Look at the figure to determine where the IKs current is largest and is therefore most likely 
to have its greatest effect.</p>";
$AttmeptOneImgSrc = "./images/cardiac_ap_and_currents.png";
$ExplanationImgSrc = "./images/LQTS1 ap and currents.png";
$Explanation = "<p>The answer is decreased outward current during phase 2.</p>
<p>In the normal ventricular action potential the primary determinant of the point at which ‘rapid’ repolarization 
begins depends strongly on the decline of I<sub>Ca,L</sub> and the simultaneous increase in IKs
 (see figure). Although the net ionic current is always outward following the rapid upstroke of the action potential, 
during the plateau this net current is very small. As the decline in I<sub>Ca,L</sub> and the increase in I<sub>Ks</sub> 
lead to increasing outward currents the membrane will enter phase 3 repolarization. With greatly reduced I<sub>Ks</sub>, 
the point at which the outward current begins to rise above plateau levels is delayed. Remember that for a prolonged 
action potential I<sub>Ks</sub> will continue to gradually increase until the membrane potential becomes more negative 
than about –40 or –50 mV (this is because IKs would not reach maximum activation until at least 1 second after the 
upstroke of the AP, but is ‘cut short’ by membrane repolarization).</p>
<p>The approximate ionic currents expected in a ventricular myocyte of a resting individual suffering from LQTS1 
(decreased numbers of functional slow delayed rectifier K<sup>+</sup> channels) is shown in the figure.</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = "7.  The Long QT AP";
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/cardiac_ap_and_currents.png";
$ProblemText = "<p>Why will a small amount of maintained Na<sup>+</sup> current (through defective 
Na<sup>+</sup> channels in LQTS3) prolong the action potential of ventricular myocytes?  Assume that the steady 
level of non-inactivating Na<sup>+</sup> current is about 1/3 to 1/2 the peak amplitude of I<sub>Ca,L</sub>.</p>
<p>A.  Increased outward current during phase 0 of the action potential</br>
B.  Increased outward current during phase 2 of the action potential</br>
C.  Increased inward current during phase 2 of the action potential</br>
D.  Increased inward current during phase 4 of the action potential</p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'C';
$ProblemChoices = 'ABCD';
$AttmeptOne = "<p><b>That's incorrect.</b></p>
<p>Outward current is when positive charge leaves the cell.  Inward current is when positive charge 
enters the cell.  Which phase is most likely to be prolonged if the AP is prolonged?</p>";
$AttmeptOneImgSrc = "./images/cardiac_ap_and_currents.png";
$ExplanationImgSrc = "./images/cardiac_ap_and_currents.png";
$Explanation = "<p>The answer is increased inward current during phase 2.</p>
<p>In the case of LQTS3, delayed rectifier K<sup>+</sup> channels are normal, but they must now not only overcome 
I<sub>Ca,L</sub> but also the non-inactivating component of I<sub>Na</sub> in order to initiate phase 3 repolarization. 
Thus I<sub>Ks</sub> must more fully activate before sufficient outward current is developed and the time required is 
increased.</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End section 7

//Begin section 8
$ProblemName = "8.  Early After-Depolarizations";
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/ead.png";
$ProblemText = "<p>One hypothesis to explain cardiac arrhythmias associated with LQTS is the development of 
<i>early after-depolarizations (EADs)</i> in some ventricular myocytes.  The appearance of an early after- depolarization 
is illustrated in the figure above.  As can be seen, this is a second wave of depolarization that occurs before the usual 
action potential is complete.  The rising phase of the EAD is much more gradual than phase 0 depolarization of the action 
potential, and the peak amplitude reached is smaller (here about +10 mV).</p>
<p>What current/channel do you believe is primarily responsible for the rising phase of the EAD?  That is, which channel 
carried the current that is directly responsible for the late upstroke near the end of phase 2.</p>
<p>A.  I<sub>Ks</sub></br>
B.  I<sub>Cl,cAMP</sub></br>
C.  I<sub>Na/Ca</sub></br>
D.  I<sub>Ca,L</sub></p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'D';
$ProblemChoices = 'ABCD';
$AttmeptOne = "<p><b>That's incorrect.</b></p>
<p>Because you the current is causing the membrane to depolarize relatively quickly, you are looking for a 
rapid, inward current.</p>";
$AttmeptOneImgSrc = "./images/cardiac_ap_and_currents.png";
$ExplanationImgSrc = "./images/ead.png";
$Explanation = "<p>This current has been pretty conclusively shown to be carried by I<sub>Ca,L</sub>.</p>
<p>You are looking for an inward current  which will depolarize the membrane.  You are also looking for a channel 
which is still active relatively late in the action potential.  The gradual increase tells you that its unlikely 
to be Na channels, which would almost certainly give you a very sharp increase similar to phase 0 in the action 
potential (where Na is responsible for most of the increase).  Also note that the Na/Ca exchange is carried 
by a transporter.  
Transporters are generally much slower than channels when transporting substances.</p>
<p>This leaves Ca current as the best possibility.</p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = "8.  Early After-Depolarizations";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/ead and currents.png";
$LessonText = "<p>EADs and cardiac arrhythmias in patients with LQTS are most commonly associated 
with situations when the sympathetic branch of the autonomic nervous system is activated (e.g., exercise or 
emotional stress or excitement – with the combination of both being most dangerous).  In a patient with LQTS1 
(greatly reduced number of functional IKs channels) explain how sympathetic activity  could  lead  to an EAD 
in a ventricular myocyte.</p>
<p>Under resting conditions a patient with LQTS1 will have a prolonged ventricular action potential that 
eventually ends primarily due to inactivation of L-type Ca channels and the slow activation of whatever number of 
I<sub>Ks</sub> delayed rectifier K channels remain functional. The reduction in I<sub>Ks</sub> has upset the usual 
delicate balance of inward and outward currents that determine the duration of the action potential in normal 
individuals – the result is that the action potential is prolonged.</p>
<p>The longer duration of the action potential means that more time is available for L-type Ca channels to more 
completely inactivate, and there is also more time for the remaining IKs channels to activate (remember that these 
would require more than a second at depolarized potentials to completely activate). Eventually the outward 
(hyperpolarizing) currents ‘win’ and the membrane repolarizes. The roles of other channels/currents should not 
be forgotten, but are not needed for a qualitative and reasonable understanding. </p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = "8.  Early After-Depolarizations";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/ead and currents.png";
$LessonText = "<p>Sympathetic stimulation will increase the magnitude of the L-type Ca current (more 
than a factor of 2 increase can occur) and somewhat shift its activation curve toward more negative potentials. 
In normal individuals I<sub>Ks</sub> will also strongly increase with the net effect that the action potential 
duration decreases. In a patient with LQTS1, I<sub>Ks</sub> is greatly decreased and may not significantly 
increase as the result of sympathetic stimulation. In both normal individuals and patients with LQTS1, 
cAMP-dependent Cl channels (I<sub>Cl,cAMP</sub>) will be facilitated by sympathetic stimulation. In the patient 
with LQTS1, this somewhat offsets the lack of I<sub>Ks</sub> channels, but is not sufficient to cause normal 
repolarization. In addition, the equilibrium potential for Cl (E<sub>Cl</sub>) is less negative in the patient 
with LTQS1 than in a normal individual (see below). In both normal individuals and (even more so) in patients 
with LQTS1 the peak inward current carried by the Na/Ca exchanger will be enhanced by sympathetic stimulation.</p>
<p>The decrease in outward current (due to LQTS1) and the increase in inward current (due to sympathetic 
stimulation) during the plateau and phase 3 repolarization creates a situation in which the membrane potential is 
unstable. Any event that upsets the now extremely delicate balance such that inward current exceeds outward current 
can trigger an EAD. These can be random events (e.g., a 'startle response’) or can depend on the characteristics 
of individual ventricular myocytes.</p>
<p>During the early portions of phase 3 repolarization a shift to a net inward (depolarizing) current will initiate 
membrane depolarization. This will activate L-type Ca channels that have deactivated, but not yet inactivated, or 
already recovered from inactivation. It is the opening of these channels that causes the relatively gradual upstroke 
of the EAD. Since (due to significant inactivation at this time) far fewer Ca channels are available to activate, 
the peak amplitude of the EAD is typically only about 0 to +10 mV. </p>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

$ProblemName = "8.  Early After-Depolarizations";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/ead and currents.png";
$LessonText = "<p>More precise details of when and how the net ionic current shifts from outward 
(hyperpolarizing) to inward (depolarizing) to initiate an EAD can be complicated, and are still a matter of 
controversy. Some factors to consider include:</p>
<ol>
<li>The equilibrium (or reversal) potential for Cl is less negative than usual for the patient with LTQS1; 
this is likely to be enhanced by sympathetic stimulation. In the introduction to this problem it was assumed 
that E<sub>Cl</sub> is only –35 mV (rather than roughly –55 mV which would be normal). This means that when 
the membrane potential becomes more negative than –35 mV the Cl current through I<sub>Cl,cAMP</sub> channels 
will shift from outward (hyperpolarizing) to inward (depolarizing). Thus it no longer contributes to 
repolarization, but instead will tend to depolarize the membrane.</li>
<li>The current carried by the Na/Ca exchanger during the plateau and repolarizing phases of the ventricular 
action potential is inward (depolarizing) and is likely to be enhanced by the increased myoplasmic 
Ca<sup>2+</sup> concentration that results from sympathetic stimulation.</li>
<li>When the membrane potential becomes more negative than about 0 mV, some L-type Ca channels begin to 
recover from inactivation. There is a delay in this recovery, but by the time the membrane potential declines 
into the range of –30 to –40 mV, some 5-10% of the channels that had inactivated have already recovered from 
inactivation. Moreover, not all of the L-type Ca channels have inactivated by this point in time. Finally, 
the voltage-dependence of activation of these channels has shifted to somewhat more negative potentials 
(activation begins near –40 mV) due to sympathetic stimulation. This means that a significant fraction of 
the total number of L-type Ca<sup>2+</sup> channels (probably about 20-30%) are available to activate during 
the early portions of phase 3 repolarization –  if the membrane potential begins to depolarize.</li>
<li>Together with reduced outward current through I<sub>Ks</sub> channels, these factors produce a 
situation that can result in EADs.</li>
</ol>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End section 8

//Begin section 9
$ProblemName = "The Long QT EKG";
$ProblemType = ProblemType::multiplechoice;
$ImgSrc = "./images/expanded t wave.png";
$ProblemText = "<p>The figure above shows the ECG of a patient with LTQS1 in comparison with a 
normal ECG.  It should be noted that not only is the QT interval prolonged, but that the T wave is much more 
spread out in time in the LTQS1 patient.</p>
<p>What does the prolonged T wave indicate about the electrical funciton of the heart?</p>
<p>A.  The action potential is taking too long to depolarize the ventricle.</br>
B.  The action potential is taking too long to get through the AV node</br>
C.  EADs are being thrown in some of the cells causing a heterogenaity in the time of replarization<br>
D.  During phase 4, the tissue is repolarizing to a very low membrane potential, then rising to the normal 
resting potential </p>
<p><b>Click on the correct answer in the bar at the upper right hand corner of the page and Evaluate.</b></p>";
$ProblemAnswer = 'C';
$ProblemChoices = 'ABCD';
$AttmeptOne = "<p><b>That's incorrect.</b></p>
<p>A T-wave problem indicates that there's something unusual about the repolarization of the heart.</p>";
$AttmeptOneImgSrc = "./images/expanded t wave.png";
$ExplanationImgSrc = "./images/prolonged T wave with heart.png";
$Explanation = "<p>Becuase the T wave takes place as the ventricles repolarize (dashed lines in figure) 
the prolonged T wave indicates temporal and especially spatial heterogeneity of phase 3 
repolarization in the ventricles. That is, there is a much larger than usual variation in the time at which 
various ventricular myocytes repolarize. This could be due to some cells having EADs (e.g. as the blue lines in the figure) 
while other cells are 
reploarizing normally.  As a result, the T-wave is “smeared” and the later reploarization in the cells with 
EADs cause the QT interval to be prolonged.</p>
<p>Does this suggest a reason why EADs could lead to severe cardiac arrhythmias such as torsade de pointes and 
ventricular fibrillation?  It is always a bad idea to have cells in the heart which are depolarized for longer 
than normal periods of time.  These is always the chance that these cells, while they have not repolarized 
themselves, will “pull up” the resting potential of adjacent groups of cells which have.  If the adjacent cells 
have recovered sufficiently, a new, full action potential could be initiated in them which will propagate and 
cause an arrhythmia.</p>
<p>The EADs will usually spread decrementally (i.e. their magnitude decreases when propagated from their point 
of origin until they disappear).  But if they are capable of reaching cells that have already completed their 
action potential they could initiate new action potentials in these cells. Obviously, these action potentials 
would not have been triggered by normal conduction from the SA node. Several such sites could easily lead to 
the chaotic pattern of excitation that is characteristic of ventricular fibrillation. </p>";

$NewProblem = CreateMultipleChoice($ProblemName, $ProblemType, $ImgSrc, $ProblemText, $ProblemAnswer, $ProblemChoices, $AttmeptOneImgSrc, $AttmeptOne, $ExplanationImgSrc, $Explanation);
array_push($subproblemlist, $NewProblem);

$ProblemName = "The Long QT EKG";
$ProblemType = ProblemType::lesson;
$ImgSrc = "./images/prolonged T wave with heart.png";
$LessonText = "<p>TREATMENTS FOR LONG QT SYNDROME:</p>
<ul>
<li>For all forms of Long QT syndrome anti-adrenergic drugs (-blockers) are the present mainstays of therapy.  
Beta blockers  prevent new episodes of syncope in approximately 75% of cases.  From the preceding discussion, 
the usefulness of sympathetic blockade should be obvious.</li>
<li>Left ventricular sympathetic denervation (via surgery) is sometimes presently required for additional 
protection.  However, this procedure obviously eliminates the ability of the left ventricle to respond to normal 
autonomic inputs.</li>
<li>Cardiac pacing (i.e., pacemakers) are also sometimes used to treat LQTS.</li>
<li>Implantable cardio-defibrillators have also be used successfully, but shocks from the device can cause 
emotional distress that can trigger further arrhythmias.</li>
<li>For patients with LQTS3 (abnormalities of Na+ channel inactivation, leading to a small sustained inward 
Na<sup>+</sup> current) open Na+ channel blockers (e.g., mexiletine) have been proven to be very effective.  
These drugs only block open Na+ channels and require about 1-2 msec to work.  Thus they take the place of 
abnormal inactivation gates.</li>
<li>For patients with LQTS1 or LTQS2 (defects causing greatly reduced numbers of functional cardiac delayed 
rectifier K+ channels) \"K<sup>+</sup> channel openers\" (which increase outward K<sup>+</sup> currents) are 
often effective.  Such drugs might also be useful in other types of LQTS.</li>
<li>Ca<sup>2+</sup> channel blockers (e.g., verapamil) are being tested.  Such drugs should inhibit the 
generation of early afterdepolarizations (EADs) and thereby reduce the likelihood of dangerous arrhythmias.</li>
<li>General Na<sup>+</sup> channel blockers (not open channel blockers, but drugs that cause partial blockage 
of all Na<sup>+</sup> channels) have also been tested.  These can reduce action potential amplitude and duration, 
but also decrease conduction velocity in the atria and ventricles.</li>
<li>It has been shown that IKr paradoxically increases in response to elevated concentrations of extracellular 
K<sup>+</sup>.  This finding suggests that moderately elevated extracellular K<sup>+</sup> concentration could 
be effective in combating not only LQTS2 (reduced number of functional I<sub>Kr</sub> channels) but also other 
forms of LQTS.  At present, clinical trials are only in preliminary stages, but the initial results are 
encouraging.</li></ul>";

$NewProblem = CreateLesson($ProblemName, $ProblemType, $ImgSrc, $LessonText);
array_push($subproblemlist, $NewProblem);

array_push($problemlist,$subproblemlist);
$subproblemlist = array();
//End section 9

?>
