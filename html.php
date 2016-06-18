					<div id="gdr_1" class="gdr-input form-group">
						<h4>STEP 1 of 4</h4>
						<p><?php _e( 'Good Reasons helps you to discuss the validity of an argument. Its aim is to create good quality debates among us, authors and readers. Ready ?:-)', 'gdr' ); ?></p>
						<label for="gdr_arg"><?php _e( 'Please paste the line of argumentation that you want to discuss', 'gdr' ); ?></label>
						<textarea id="gdr_arg" class="form-control" rows="3"></textarea>
						<label for="gdr_validity"><?php _e( 'Do you want to signal this argument as invalid ?', 'gdr' ); ?></label>
						<select class="form-control" id="gdr_validity">
							<option value="Yes">Yes</option>
							<option value="No">No</option>
						</select>
						<p id="gdr_arg_msg" style="color: #ff644d;"><?php _e( 'Please paste an argumentation line here above. Mandatory field.', 'gdr' ); ?></p>
					</div>

					<div id="gdr_2" class="gdr-validity form-group">
						<h4>STEP 2 of 4</h4>
						<label for="gdr_why"><?php _e( 'What makes you think it is invalid ?', 'gdr' ); ?></label>
						<div class="radio">
							<label for="gdr_why_formal">
								<input id="gdr_why_formal" type="radio" name="gdr_why" value="Formal Fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'In a formal fallacy, the conclusion does not follow even if the premises are correct ; which means that there must be a problem with the structure of the argument', 'gdr' ); ?>"><?php _e( 'There’s something illogical about it. The pattern of reasoning seems to be wrong (formal fallacy)', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label for="gdr_why_informal">
								<input id="gdr_why_informal" type="radio" name="gdr_why" value="Informal Fallacy">
								<span><?php _e( 'The argument seems to be built on the wrong premises (informal fallacy)', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label for="gdr_why_both">
								<input id="gdr_why_both" type="radio" name="gdr_why" value="Formal + Informal">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'The argument isn’t particularly illogical in itself but it seems built on the wrong premises (informal fallacy)', 'gdr' ); ?>"><?php _e( 'The argument is both formally illogical and based on false premises', 'gdr' ); ?></span>
							</label>
						</div>
					</div>

					<div id="gdr_3a" class="gdr_formal_type form-group">
						<h4>STEP 3 of 4</h4>
						<p for="gdr_formal_type"><strong><?php _e( 'You identified a FORMAL FALLACY. Which kind ?', 'gdr' ); ?></strong></p>

						<label for="gdr_formal_type" data-toggle="tooltip" title="<?php _e( 'A propositional fallacy is an error in logic that concerns compound propositions (non sequitur).', 'gdr' ); ?>"><?php _e( '1. Propositional Fallacy', 'gdr' ); ?></label>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Affirming a Disjunct">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Affirming a disjunct : « A or B; A, therefore not B. »', 'gdr' ); ?>"><?php _e( 'Affirming a Disjunct', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Affirming the Consequent">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Affirming the consequent : « if A, then B; B, therefore A »', 'gdr' ); ?>"><?php _e( 'Affirming the Consequent', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Denying the Antecedent">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Denying the antecedent : « if A, then B; not A, therefore not B »', 'gdr' ); ?>"><?php _e( 'Denying the Antecedent', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Fallacy Fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Denying the antecedent : « if A, then B; not A, therefore not B »', 'gdr' ); ?>"><?php _e( 'Fallacy Fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>

						<label for="gdr_formal_type"><?php _e( '2. Probabilistic Fallacy', 'gdr' ); ?></label>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Base Rate Fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Base rate fallacy occurs when someone misjudges the likelihood of an event because one doesn\'t take into account other relevant base rate information. Example : « Only 6% of applicants make it into this school, but my son is brilliant. They are certainly going to accept him ».', 'gdr' ); ?>"><?php _e( 'Base Rate Fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Conjunction Fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Formal fallacy that occurs when it is assumed that specific conditions are more probable than a single general one. Here is the most famous example of this fallacy : Linda is 31 years old, single, outspoken, and very bright. She majored in philosophy. As a student, she was deeply concerned with issues of discrimination and social justice, and also participated in anti-nuclear demonstrations. Which is more probable? A: Linda is a bank teller. B: Linda is a bank teller and is active in the feminist movement. A large majority answers the question wrong, and choose option B (Tversky & Kahneman, 1982).', 'gdr' ); ?>"><?php _e( 'Conjunction Fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Gambler’s Fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Fallacious belief that, if something happens more frequently than normal during some period, it will happen less frequently in the future (or vice versa).', 'gdr' ); ?>"><?php _e( 'Gambler’s Fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Hot Hand Fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Fallacious belief that a person who has experienced success with a random event has a greater chance of further success in additional attempts.', 'gdr' ); ?>"><?php _e( 'Hot Hand Fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Inverse Fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'The confusion of the inverse or « inverse fallacy » is a fallacy whereupon a conditional probability is equivocated with its inverse. That is, given two events A and B, the probability of A happening given that B has happened is assumed to be about the same as the probability of B given A.', 'gdr' ); ?>"><?php _e( 'Inverse Fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Multiple Comparisons Fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Belief according to which, if multiple studies reach the same conclusion, then the conclusion must be true. It can be fallacious : in inductive reasoning, there is always a chance that the conclusion might be false, despite the truth of the premises. Confidence levels go from 95 to 99 %.', 'gdr' ); ?>"><?php _e( 'Multiple Comparisons Fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>

						<label for="gdr_formal_type"><?php _e( '3. Syllogistic Fallacy', 'gdr' ); ?></label>
						<small><?php _e( '(eg. all A are (not) B" and "some A are (not) B" are connected for no reason).', 'gdr' ); ?></small>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Affirmative conclusion from a negative premise">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Formal fallacy committed when a categorical syllogism has a positive conclusion, but one or two negative premises. Example : « People who read trash don\'t appreciate great literature. We don\'t read trash. Therefore we appreciate great literature »', 'gdr' ); ?>"><?php _e( 'Affirmative conclusion from a negative premise', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Fallacy of exclusive premises">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'A syllogistic fallacy committed in a categorical syllogism that is invalid because both of its premises are negative', 'gdr' ); ?>"><?php _e( 'Fallacy of exclusive premises', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Four-term fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Formal fallacy that occurs when a syllogism has four (or more) terms rather than the requisite three. This form of argument is thus invalid.', 'gdr' ); ?>"><?php _e( 'Four-term fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Illicit minor">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Formal fallacy committed in a categorical syllogism that is invalid because its minor term is undistributed in the minor premise but distributed in the conclusion.', 'gdr' ); ?>"><?php _e( 'Illicit minor', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Illicit major">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Formal fallacy committed in a categorical syllogism that is invalid because its major term is undistributed in the major premise but distributed in the conclusion.', 'gdr' ); ?>"><?php _e( 'Illicit major', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Masked man fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'The masked man fallacy is a formal fallacy which states that if one object is known as having a certain property, while another object does not seem to have the same property, the two objects cannot be identical. « I know P, I don\'t know Q, Therefore, P is not Q ».', 'gdr' ); ?>"><?php _e( 'Masked man fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Negative conclusion from affirmative premises">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Formal fallacy committed when a categorical syllogism has a negative conclusion yet both premises are affirmative.', 'gdr' ); ?>"><?php _e( 'Negative conclusion from affirmative premises', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Modal scope fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'In a modal scope fallacy (fallacy of necessity), a degree of unwarranted necessity is placed in the conclusion. Example : « Bachelors are necessarily unmarried. A is a bachelor. Therefore, A cannot marry ».', 'gdr' ); ?>"><?php _e( 'Modal scope fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Undistributed middle">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Formal fallacy that is committed when the middle term in a categorical syllogism is not distributed in either the minor premise or the major premise.', 'gdr' ); ?>"><?php _e( 'Undistributed middle', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>

						<label for="gdr_formal_type" data-toggle="tooltip"><?php _e( '4. Quantificational fallacy', 'gdr' ); ?></label>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Existential fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Fallacious argument that has a universal premise and a particular conclusion', 'gdr' ); ?>"><?php _e( 'Existential fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Illicit conversion">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Formal fallacy where the subject and the predicate terms of the proposition are switched in the conclusion, in a proposition that uses “all” in its premise, or “some/not”. Example : All A are B, therefore all B are A.', 'gdr' ); ?>"><?php _e( 'Illicit conversion', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Inapropriate generalization">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Fallacy whereby one or more examples are claimed as "proof" for a more general statement', 'gdr' ); ?>"><?php _e( 'Inapropriate generalization', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Quantifier shift">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'A quantifier shift is a logical fallacy in which the quantifiers of a statement are erroneously transposed. Example : « Everybody has something to believe in. Therefore, there is something that everybody believes in. »', 'gdr' ); ?>"><?php _e( 'Quantifier shift', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>
					</div>

					<div id="gdr_3b" class="gdr_informal_type form-group">
						<h4>STEP 3 of 4</h4>
						<p for="gdr_formal_type"><strong><?php _e( 'You identified is as an INFORMAL FALLACY then. Which kind ?', 'gdr' ); ?></strong></p>

						<label for="gdr_informal_type" data-toggle="tooltip" title="<?php _e( 'A propositional fallacy is an error in logic that concerns compound propositions (non sequitur).', 'gdr' ); ?>"><?php _e( '1. Diversions (Red Herring)', 'gdr' ); ?></label>

						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Genetic Fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'A genetic fallacy is an informal logical fallacy that occurs when a claim is accepted (or rejected) based on the source of the evidence, rather than on the quality of the evidence itself. Example : « X says Y is true. And X is a bad source. Therefore, Y cannot be true »', 'gdr' ); ?>"><?php _e( 'Genetic Fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Authority">
								<span><?php _e( 'Appeal to Authority', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Consequences">
								<span><?php _e( 'Appeal to Consequences', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Emotion">
								<span><?php _e( 'Appeal to Emotion', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Ad Personam">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Attacking the character of the person making the argument, rather than the substance of the argument itself.', 'gdr' ); ?>"><?php _e( 'Ad Personam', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>

						<label for="gdr_informal_type"><?php _e( '2. Attacks against a Person', 'gdr' ); ?></label>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Ad Personam argument">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Attacking the character of the person making the argument, rather than the substance of the argument itself.', 'gdr' ); ?>"><?php _e( 'Ad Personam argument', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Ad Hominem Circumstantial">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Attacking a claim by asserting that the person making the claim is making it simply out of self interest.', 'gdr' ); ?>"><?php _e( 'Ad Hominem Circumstantial', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Ad Fidentia">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'A ttacking the person\'s self-confidence in place of the argument of evidence.', 'gdr' ); ?>"><?php _e( 'Ad Fidentia', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Association fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Asserting that qualities of one thing are inherently qualities of another, merely by an irrelevant association.', 'gdr' ); ?>"><?php _e( 'Association fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Guilt by Association">
								<span><?php _e( 'Guilt by Association', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Genetic Fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Claim based solely on someone\'s or something\'s history, origin, or source rather than its current meaning or context.', 'gdr' ); ?>"><?php _e( 'Genetic Fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Poisoning the Well">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Fallacy that intends to discredit the validity of the opponent\'s argument by asserting the opponent\'s failure to act consistently in accordance with with the claims of the argument.', 'gdr' ); ?>"><?php _e( 'Poisoning the Well', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Tu Quoque">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Fallacy that intends to discredit the validity of the opponent\'s argument by asserting the opponent\'s failure to act consistently in accordance with with the claims of the argument.', 'gdr' ); ?>"><?php _e( 'Tu Quoque', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Two wrongs make a right">
								<span><?php _e( 'Two wrongs make a right', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Other">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>

						<label for="gdr_informal_type"><?php _e( '3. Appeal to Authority (and the like)', 'gdr' ); ?></label>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Anonymous Authority">
								<span><?php _e( 'Appeal to Anonymous Authority', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to False Authority">
								<span><?php _e( 'Appeal to False Authority', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Force: Ad Baculum">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'In the appeal to force, someone in a position of power threatens to bring down bad consequences upon anyone who dares to disagree with his or her claim.', 'gdr' ); ?>"><?php _e( 'Appeal to Force: Ad Baculum', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal from Ignorance">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'A n argument for or against a proposition on the basis of a lack of evidence against or for it.. « There is no evidence against p. Therefore, p ». Or, on the contrary « There is no evidence for p. Therefore, not-p. ».', 'gdr' ); ?>"><?php _e( 'Appeal from Ignorance', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Association fallacy , Honor by association">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Asserting that qualities of one thing are inherently qualities of another, merely by an irrelevant association.', 'gdr' ); ?>"><?php _e( 'Association fallacy , Honor by association', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Common Belief (ad populum)">
								<span><?php _e( 'Appeal to Common Belief (ad populum)', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Tradition (ad antiquitatem)">
								<span><?php _e( 'Appeal to Tradition (ad antiquitatem)', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Novelty (ad novitatem)">
								<span><?php _e( 'Appeal to Novelty (ad novitatem)', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to the People (ad populum)">
								<span><?php _e( 'Appeal to the People (ad populum)', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Bandwagon Fallacy (ad numerum)">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( '« If many believe so, it is so ».', 'gdr' ); ?>"><?php _e( 'Bandwagon Fallacy (ad numerum)', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Etymological fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'genetic fallacy that holds that the present-day meaning of a word or phrase should necessarily be similar to its historical meaning.', 'gdr' ); ?>"><?php _e( 'Etymological fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Shifting the Burden of proof">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Somebody presenting a new claim has to provide evidence to support its truth. Shifting the burden of proof (onus probandi) is a fallacy that says, on the contrary : « I need not prove my claim, you must prove it is false ».', 'gdr' ); ?>"><?php _e( 'Shifting the Burden of proof', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Other">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>

						<label for="gdr_informal_type" data-toggle="tooltip" title="<?php _e( 'L anguage intended to produce an emotional response in the mind of the audience, in order to affect their views on a topic.', 'gdr' ); ?>"><?php _e( '4. Appeal to Emotion (Loaded language)', 'gdr' ); ?></label>

						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Consequences">
								<span><?php _e( 'Appeal to Consequences', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Disgust">
								<span><?php _e( 'Appeal to Disgust', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Fear">
								<span><?php _e( 'Appeal to Fear', 'gdr' ); ?></span>
							</label>
						</div>

						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Flattery">
								<span><?php _e( 'Appeal to Flattery', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Pity (ad misericordiam)">
								<span><?php _e( 'Appeal to Pity (ad misericordiam)', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Ridicule">
								<span><?php _e( 'Appeal to Ridicule', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Spite (ad odium)">
								<span><?php _e( 'Appeal to Spite (ad odium)', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to Superiority">
								<span><?php _e( 'Appeal to Superiority', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Argumentum ad Nauseam">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'A rgument made repeatedly (possibly by different people) until nobody cares to discuss it any more.', 'gdr' ); ?>"><?php _e( 'Argumentum ad Nauseam', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="In-group favoritism">
								<span><?php _e( 'In-group favoritism', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Think of the Children fallacy">
								<span><?php _e( 'Think of the Children fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Other">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>

						<label for="gdr_informal_type"><?php _e( '5. Appeal to Consequences', 'gdr' ); ?></label>

						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Appeal to force (Argumentum ad baculum)">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'In the appeal to force, someone in a position of power threatens to bring down bad consequences upon anyone who
dares to disagree with his or her claim.', 'gdr' ); ?>"><?php _e( 'Appeal to force (Argumentum ad baculum)', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="The moralistic fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'The informal fallacy of assuming that whichever aspect of nature which has socially unpleasant consequences cannot exist. Its typical form is if X were true, then it would happen that Z!, where Z is a morally, socially or politically undesirable thing.', 'gdr' ); ?>"><?php _e( 'The moralistic fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="The naturalistic fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'deduction of an \'ought\' from an \'is\'', 'gdr' ); ?>"><?php _e( 'The naturalistic fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Wishful thinking">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'making statements according to what might be pleasing to imagine instead of by appealing to evidence, rationality or reality.', 'gdr' ); ?>"><?php _e( 'Wishful thinking', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Slippery Slope">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'a logical fallacy in which the reasoner begins with what they are trying to end with. \'A is true because B is true; B is true because A is true.\' Circular arguments are technically valid―that is, if their premisses are true then their conclusions must also be true. However, circular reasoning cannot advance knowledge : it ends up in the same place it started.', 'gdr' ); ?>"><?php _e( 'Slippery Slope', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Other">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>

						<label for="gdr_informal_type"><?php _e( '6. Circular reasoning', 'gdr' ); ?></label>

						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Circular argument, tautology">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'a logical fallacy in which the reasoner begins with what they are trying to end with. \'A is true because B is true; B is true because A is true. Circular arguments are technically valid―that is, if their premisses are true then their conclusions must also be true. However, circular reasoning cannot advance knowledge : it ends up in the same place it started.', 'gdr' ); ?>"><?php _e( 'Circular argument, tautology', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Petitio Principii, Begging the question">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Fallacy that is committed whenever the arguer creates the illusion that inadequate premises provide adequate support for the conclusion.', 'gdr' ); ?>"><?php _e( 'Petitio Principii, Begging the question', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Shifting the Burden of proof">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Somebody presenting a new claim has to provide evidence to support its truth. Shifting the burden of proof (onus probandi) is a fallacy that says, on the contrary : « I need not prove my claim, you must prove it is false ».', 'gdr' ); ?>"><?php _e( 'Shifting the Burden of proof', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Argument from authority">
								<span><?php _e( 'Argument from authority', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Other">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>

						<label for="gdr_informal_type"><?php _e( '7. Questionable cause (Non Causa Pro Causa)', 'gdr' ); ?></label>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Cum Hoc, Ergo Propter Hoc">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( '\'With this, therefore because of this\' in Latin. It is a logical fallacy which states that \'correlation proves causation\'.', 'gdr' ); ?>"><?php _e( 'Cum Hoc, Ergo Propter Hoc', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Post Hoc, Ergo Propter Hoc">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( '\'After, this, therefore because of this » in Latin. It is a logical fallacy which states \'Since event B followed event A, event B must have been caused by event A.\'', 'gdr' ); ?>"><?php _e( 'Post Hoc, Ergo Propter Hoc', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Texas Sharpshooter Fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Informal fallacy which is committed when differences in data are ignored, but similarities are stressed. From this reasoning a false conclusion is inferred.', 'gdr' ); ?>"><?php _e( 'Texas Sharpshooter Fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Jumping to Conclusion Bias">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Tendency to judge or decide something without having all the facts and to reach unwarranted conclusions.', 'gdr' ); ?>"><?php _e( 'Jumping to Conclusion Bias', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Slippery Slope">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'consequentialist fallacy in which a party asserts that a particular result will follow from a given decision or circumstance, without providing any valid argument for the likelihood of the assumed consequence.', 'gdr' ); ?>"><?php _e( 'Slippery Slope', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Other">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>

						<label for="gdr_informal_type"><?php _e( '8. Inductive fallacy', 'gdr' ); ?></label>

						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Confirmation Bias">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Tendency to favor information that confirms one\'s preexisting hypotheses, while giving less consideration to alternative hypotheses', 'gdr' ); ?>"><?php _e( 'Confirmation Bias', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="False analogy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'A false analogy is a faulty instance of the argument from analogy (in which perceived similarities are used as a basis to infer other similarities that have yet to be observed).', 'gdr' ); ?>"><?php _e( 'False analogy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Hasty generalization">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Inductive generalization based on insufficient evidence', 'gdr' ); ?>"><?php _e( 'Hasty generalization', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Fallacy of Composition">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'The fallacy of composition arises when one infers that something is true of the whole from the fact that it is true of some part of the whole', 'gdr' ); ?>"><?php _e( 'Fallacy of Composition', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Fallacy of Division">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Fallacy which states that something true for the whole must also be true of all or some of its parts.', 'gdr' ); ?>"><?php _e( 'Fallacy of Division', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Misleading Vividness">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Hasty generalization based on anecdotal evidence', 'gdr' ); ?>"><?php _e( 'Misleading Vividness', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="One-Sidedness">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Informal fallacy which occurs when only the reasons supporting a proposition are supplied, while all reasons opposing it are omitted.', 'gdr' ); ?>"><?php _e( 'One-Sidedness', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Sampling bias (cherry picking)">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'In statistics, sampling bias is a bias in which a sample is created in such a way that some members of the population are less likely to be included than others.', 'gdr' ); ?>"><?php _e( 'Sampling bias 65 (cherry picking)', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Weak Analogy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Fallacy which states that if A is like B. And B has property P. Then, A has property P.', 'gdr' ); ?>"><?php _e( 'Weak Analogy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Other">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>

						<label for="gdr_informal_type"><?php _e( '9. Deductive fallacy', 'gdr' ); ?></label>

						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Accident">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Xs are normally Ys. A is an X (Where A is abnormal). Therefore, A is a Y. « Birds can fly. A penguin is a bird. Therefore, a penguin can fly ».', 'gdr' ); ?>"><?php _e( 'Accident', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Converse accident">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Informal fallacy that can occur in a statistical syllogism when an exception to a generalization is wrongly excluded, and the generalization wrongly called for as applying to all cases.', 'gdr' ); ?>"><?php _e( 'Converse accident', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Argument to moderation">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Fallacy which asserts that the truth can only be found as a compromise between two opposite positions (argumentum ad temperantiam). This fallacy\'s opposite is the false dilemma (or Black-or-White fallacy).', 'gdr' ); ?>"><?php _e( 'Argument to moderation', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="False Dilemma">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Fallacy which involves presenting two opposing views, options or outcomes in such a way that they seem to be the only possibilities (Black-or-White fallacy).', 'gdr' ); ?>"><?php _e( 'False Dilemma', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Invincible Ignorance Fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'A deductive fallacy of circularity where the person in question simply pig-headedly refuses to believe the argument, ignoring any evidence given.', 'gdr' ); ?>"><?php _e( 'Invincible Ignorance Fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Suppressed correlative">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( '\'I define A such that all things that you claim are not A are included in A.\'', 'gdr' ); ?>"><?php _e( 'Suppressed correlative', 'gdr' ); ?></span>
							</label>
						</div>

						<label for="gdr_informal_type"><?php _e( '10. Presumption, ambiguity and illicit transference', 'gdr' ); ?></label>

						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Double standard">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'attempt to cite something as an exception to a generally accepted rule without justifying the exception', 'gdr' ); ?>"><?php _e( 'Double standard', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Equivocation">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'An equivacation is a misleading use of a term with more than one meaning. Example : « A feather is light. What is light cannot be dark. Therefore, a feather cannot be dark ».', 'gdr' ); ?>"><?php _e( 'Equivocation', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Fallacy of Ambiguity">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'When the ambiguity of an argument makes a formally invalid argument appear to be valid.', 'gdr' ); ?>"><?php _e( 'Fallacy of Ambiguity', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Fallacy of Amphibology">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'The fallacy of amphiboly occurs when a sentence, because of its grammar, structure or punctuation, can be interpreted in multiple ways.', 'gdr' ); ?>"><?php _e( 'Fallacy of Amphibology', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Fallacy of Composition">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'The fallacy of composition arises when one infers that something is true of the whole from the fact that it is true of some part of the whole', 'gdr' ); ?>"><?php _e( 'Fallacy of Composition', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Fallacy of Division">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Fallacy which states that something true for the whole must also be true of all or some of its parts.', 'gdr' ); ?>"><?php _e( 'Fallacy of Division', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Loaded question">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Q uestion that contains a controversial or unjustified assumption', 'gdr' ); ?>"><?php _e( 'Loaded question', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Loki's Wager">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'unreasonable insistence that a concept cannot be defined, and therefore cannot be discussed', 'gdr' ); ?>"><?php _e( 'Loki\'s Wager', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="No true Scotsman">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Rejecting an unfavourable example in order to support a universal assertion about a group (\'no true Scotman would do such a thing)', 'gdr' ); ?>"><?php _e( 'No true Scotsman', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Reification">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( '« Reification » is a fallacy of ambiguity, when an abstraction is treated as if it were a concrete, real event, or physical entity.', 'gdr' ); ?>"><?php _e( 'Reification', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Sorites paradox">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'Continuum fallacy : fallacy which consists in rejecting a vague claim simply because it is not as precise as one would like it to be.', 'gdr' ); ?>"><?php _e( 'Sorites paradox', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Other">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>

						<label for="gdr_informal_type"><?php _e( '11. False attribution', 'gdr' ); ?></label>

						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Straw Man Fallacy">
								<span data-toggle="tooltip" data-placement="top" title="<?php _e( 'I n a straw man argument, the arguer misrepresents the argument of another participant in the dialogue.', 'gdr' ); ?>"><?php _e( 'Straw Man Fallacy', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Quoting out of context">
								<span><?php _e( 'Quoting out of context', 'gdr' ); ?></span>
							</label>
						</div>
						<div class="radio">
							<label>
								<input type="radio" name="gdr_type" value="Other">
								<span><?php _e( 'Other', 'gdr' ); ?></span>
							</label>
						</div>
					</div>

					<div id="gdr_4" class="gdr-input form-group">

						<h4>STEP 4 of 4</h4>
						<p><?php _e( 'Last step : submit notification to author and community', 'gdr' ); ?></p>
						<label for="gdr_com"><?php _e( 'Personal Comment (optional)', 'gdr' ); ?></label>
						<textarea id="gdr_com" class="form-control" rows="3"></textarea>
						<label for="gdr_name"><?php _e( 'My Name', 'gdr' ); ?></label>
						<input type="text" class="form-control" id="gdr_name" placeholder="Name">
						<label for="gdr_email"><?php _e( 'My Email', 'gdr' ); ?></label>
						<input type="email" class="form-control" id="gdr_email" placeholder="Email">
						<p id="gdr_com_msg" style="color: #ff644d;"><?php _e( 'Correct name and email required.', 'gdr' ); ?></p>
					</div>

					<div id="gdr_5" class="gdr-input form-group">
						<h2><?php _e( 'Thank You.', 'gdr' ); ?></h2>
					</div>

