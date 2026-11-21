<?php
require_once __DIR__ . '/includes/init.php';

$pagename = "ai-insurance-policy-review.php";

$title = "AI Insurance Policy Review";

$meta_description = 'AI Insurance Policy Review';

require_once __DIR__ . '/includes/header.php';
?>

<style>
    .hpp_notice_link {
        font-size: 1.1rem;;
    }
    .hpp_notice {
        margin-top: 30px;
    }
    .hpp_notice h3 {
        font-size: 1.6rem;
        font-weight: 600;
    }
    .hpp_notice h4 {
        font-size: 1.4rem;
        margin-bottom: 10px;
        font-weight: 600;
    }
    .hpp_notice hr {
        margin: 20px 0;
    }
    .hpp_notice .pi_detail {
        margin: 15px 0;
    }
    .hpp_notice .pi_detail .bb_1 {
        border-bottom: 1px solid #212529;
        width: 250px;
        display: inline-block;
    }
</style>

    <section class="cd-property section">
        <div class="container">
            <div class="row">
                <div class="col-xl-8 col-md-8 col-lg-8">
                    <div class="cd-sectiontitle text-center">
                        <h1 class="titleh1">AI Insurance Policy Review</h1>
                    </div>

                    <p>Below you will find a preview of the AI Insurance Policy review. To Download the word template simply click the link below.</p>

                    <a href="<?php echo site_url(); ?>AI-Insurance-Policy-Review.docx" download class="hpp_notice_link">Download AI Insurance Policy Review</a>
                    
                    <div class="hpp_notice">
                        <h3 style="color:#50b1df;">AI Insurance Policy Review Prompt (General Review)</h3>
                        <hr>

                        <h4  >Purpose:</h4>

                        
                        <p>This prompt helps property owners and property managers understand what their insurance policy covers before a loss occurs. It helps identify limitations, exclusions, and potential financial risks so better decisions can be made at renewal and before filing claims.</p>
                        
                        <h4>Instructions:</h4>
                        
                        <p>Upload or paste the full insurance policy including the declarations page, endorsements, and exclusions. Then copy and paste the prompt below into your AI tool.</p>
                        

                    

                        <h4 style="color:#50b1df;">Prompt</h4>
                        
                        <p>You are an insurance policy analyst. Review the attached property insurance policy and provide a clear and practical summary written for a property owner or property manager. Do not provide legal advice. Focus on identifying important coverage details, limitations, and financial risks that should be understood before a loss occurs. Organize the response using the sections below.</p>


                            <h4 style="color:#50b1df;">1. Policy Overview.</h4>
                            <p>Summarize the basic structure of the policy.<br>Include:</p>
                            <ul class="listing">
                                    <li>Named insured.</li>
                                    <li>Policy effective dates. </li>
                                    <li>Policy type (HO3, HO6, landlord policy, commercial policy, HOA master policy, etc). </li>
                                    <li>Property address. </li>
                                    <li>Whether the policy appears replacement cost or actual cash value. </li>
                                </ul>
                                <p>Explain what type of property this policy appears designed to protect.</p>
                                
                                
                                <h4 style="color:#50b1df;">2. Coverage Limits Summary.</h4>
                            <p>List each major coverage category and corresponding limits.<br>
                            Include:</p>
                            <ul class="listing">
                            <li>Dwelling or building coverage</li> 
                            <li>Other structures coverage</li> 
                            <li>Personal property or contents coverage</li> 
                            <li>Loss of use or business interruption coverage</li> 
                            <li>Liability coverage</li> 
                            <li>Ordinance or law coverage</li> 
                            <li>Water damage limitations</li> 
                            <li>Mold or fungi limitations</li> 
                            </ul>
                            <p>Clearly identify any unusually low limits.<br>
                            Explain how these limits compare to typical repair costs.</p>


                            <h4 style="color:#50b1df;">3. Deductibles.</h4>
                            <p>Identify all deductibles and explain when each applies.<br>
                            Include:</p>
                            <ul class="listing">
                            <li>All other perils deductible</li> 
                            <li>Hurricane deductible</li> 
                            <li>Wind deductible</li> 
                            <li>Named storm deductible</li> 
                            <li>Water damage deductible if applicable</li> 
                            </ul>
                            <p>Explain how deductible amounts may impact claim decisions.</p>

                            <h4 style="color:#50b1df;">4. Water Damage Coverage.</h4>
                            <p>Explain how the policy handles water damage.<br>
                            Clarify:</p>
                            <ul class="listing">
                            <li>Whether sudden and accidental plumbing leaks appear covered</li> 
                            <li>Whether appliance leaks appear covered</li> 
                            <li>Whether hidden leaks appear covered</li> 
                            <li>Any exclusions for repeated seepage</li> 
                            <li>Any caps on water damage claims</li> 
                            <li>Any limitations on tear out access to plumbing</li> 
                            </ul>
                            <p>Identify any language that limits water damage coverage.</p>

                            <h4 style="color:#50b1df;">5. Mold Or Fungi Coverage.</h4>
                            <p>Explain whether mold coverage exists and summarize limitations.<br>
                            Include:</p>
                            <ul class="listing">
                            <li>Mold or fungi coverage limit</li> 
                            <li>Whether testing appears covered</li> 
                            <li>Whether remediation appears covered</li> 
                            <li>Whether coverage depends on a covered water loss</li> 
                            <li>Any wording that significantly restricts mold coverage</li> 
                            </ul>
                            <p>Explain potential financial exposure if mold is discovered</p>

                            <h4 style="color:#50b1df;">6. Storm, Wind, And Wind Driven Rain.</h4>
                            <p>Explain how the policy handles storm related damage.<br>
                            Clarify:</p>
                            <ul class="listing">
                            <li>Whether wind damage appears covered</li> 
                            <li>Whether hurricane damage appears covered</li> 
                            <li>Whether wind driven rain is covered or excluded</li> 
                            <li>Whether openings must be created by storm forces for coverage to apply</li> 
                            <li>Any special hurricane deductible</li> 
                            <li>Any roof age limitations</li> 
                            <li>Any cosmetic roof damage exclusions</li> 
                            </ul>
                            <p>Explain any wording that may limit storm related claims.</p>

                            <h4 style="color:#50b1df;">7. Contents And Personal Property.</h4>
                            <p>Explain how the policy covers contents.<br>
                            Include:</p>
                            <ul class="listing">
                            <li>Coverage limit for personal property</li> 
                            <li>Whether replacement cost or actual cash value applies</li> 
                            <li>Any exclusions for electronics, art, or specialty items</li> 
                            <li>Whether contents damaged by water appear covered</li> 
                            <li>Whether off premises coverage exists</li> 
                            </ul>
                            <p>Explain any limitations that may impact recovery after a loss.</p>

                            <h4 style="color:#50b1df;">8. Loss Of Use Or Business Interruption.</h4>
                            <p>Explain whether the policy provides compensation if the property becomes uninhabitable or unusable.<br>
                            Clarify:</p>
                            <ul class="listing">
                            <li>Coverage limit</li> 
                            <li>Time limitations</li> 
                            <li>Whether temporary housing appears covered</li> 
                            <li>Whether loss of rental income appears covered</li> 
                            <li>Any waiting period before coverage applies</li>
                            </ul> 
                            <p>Explain situations where this coverage becomes important</p>

                            <h4 style="color:#50b1df;">9. Major Exclusions.</h4>
                            <p>Identify major exclusions that could impact claim approval.<br>
                            Focus on exclusions related to:</p>
                            <ul class="listing">
                            <li>Long term leaks</li> 
                            <li>Wear and tear</li> 
                            <li>Maintenance issues</li> 
                            <li>Flooding</li> 
                            <li>Earth movement</li> 
                            <li>Sewer backup if not endorsed</li> 
                            <li>Gradual deterioration</li> 
                            <li>High humidity conditions</li> 
                            </ul>
                            <p>Explain the practical meaning of these exclusions.</p>

                            <h4 style="color:#50b1df;">10. Duties After Loss.</h4>
                            <p>Summarize the responsibilities of the policyholder after a loss.<br>
                            Include:</p>
                            <ul class="listing">
                            <li>Duty to mitigate damage</li> 
                            <li>Duty to prevent further damage</li> 
                            <li>Requirement to document conditions</li> 
                            <li>Requirement to report claims promptly</li> 
                            <li>Cooperation requirements</li> 
                            </ul>
                            <p>Explain how failure to comply could affect coverage.</p>

                            <h4 style="color:#50b1df;">11. Potential Coverage Gaps.</h4>
                            <p>Identify any potential risks or coverage limitations that may create financial exposure.<br>
                            Examples may include:</p>
                            <ul class="listing">
                            <li>Low water damage limits</li> 
                            <li>Low mold limits</li> 
                            <li>High deductibles</li> 
                            <li>Roof exclusions</li> 
                            <li>Limited loss of use coverage</li> 
                            <li>Missing endorsements</li> 
                            </ul>
                            <p>Explain why each item may create risk.</p>

                            <h4 style="color:#50b1df;">12. Renewal Risk Considerations.</h4>
                            <p>Identify factors that may affect future insurability or premiums.<br>
                            Examples:</p>
                            <ul class="listing">
                            <li>Water damage exposure</li> 
                            <li>Storm risk exposure</li> 
                            <li>Roof condition concerns</li> 
                            <li>High deductible structure</li> 
                            <li>Limited coverage structures</li> 
                            </ul>
                            <p>Explain how policy structure may impact renewal options.</p>

                            <h4 style="color:#50b1df;">13. Questions To Ask My Insurance Agent.</h4>
                            <p>Provide a list of practical questions the policyholder should ask their insurance agent based on the policy review.<br>
                            Focus on:</p>
                            <ul class="listing">
                            <li>improving coverage</li> 
                            <li>adjusting deductibles</li> 
                            <li>endorsement options</li> 
                            <li>policy alternatives</li> 
                            <li>risk reduction strategies</li> 
                            </ul>
                            <h4 style="color:#50b1df;">14. Plain English Summary.</h4>
                            <p>Provide a simple summary explaining:</p>
                            <ul class="listing">
                            <li>What the policy appears to cover well</li> 
                            <li>Where limitations exist</li> 
                            <li>Where financial risk may exist</li> 
                            <li>Whether the policy appears restrictive or comprehensive</li> 
                            </ul>
                            <p>Keep the tone neutral and educational.</p>
                            
                    </div>

                </div>
                
                <?php
                require_once __DIR__ . '/includes/left-sidebar.php';
                ?>
            </div>            
        </div>
    </section>

    <?php
    require_once __DIR__ . '/includes/our-client-logos-list.php';
    ?>

<?php
require_once __DIR__ . '/includes/footer.php';
?>