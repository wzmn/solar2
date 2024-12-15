@section("title", "Job Openings – Start Your Career in Renewable Energy")

@extends("layouts.website")


@section("header")
<div class="mb-100 d-flex flex-column flex-fill justify-content-end align-items-start">
  <h1 class="text-white">Job Openings</h1>
  <div class="hero__content text-white mb-3">
    Home > Career > Job Openings
  </div>
</div>
@endsection

@section("content")
<div class="opening-component pb-5 pt-5 career" style="background: url('{{ asset('assets/images/history-bg.png') }}') no-repeat;background-size: cover;">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h1 data-aos="fade-up" class="highlight text-center highlight--center mb-4 pb-3">
          Current Openings
        </h1>
        <div class="content text-center" data-aos="fade-up">
          <p>
            Step into the future with <a href="https://enernew.in" target="_blank" data-aos="fade-right" data-aos-delay="400" class="text-orange">Enernew</a>. Explore our latest career
            openings that promise to challenge and inspire, empowering you
            to contribute to transformative projects in renewable energy.
            Discover the role that resonates with you, empowering you to
            achieve your goals while simultaneously advancing our nation
            and marking a global impact.
          </p>
        </div>
        <div class="accordion mt-5" id="accordion">
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button class="accordion-button fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#accord-1" aria-expanded="true" aria-controls="accord-1">
                Sales Executive
              </button>
            </h2>
            <div id="accord-1" class="accordion-collapse collapse show" data-bs-parent="#accordion">
              <div class="accordion-body">
                <div class="bold">
                  Job Location
                </div>
                <ul>
                  <li>
                    Rajasthan
                  </li>
                </ul>
                <div class="bold">
                  Experience
                </div>
                <ul>
                  <li>
                    Minimum of 3-5 years of proven experience in sales within the renewable energy sector, with a focus on solar energy solutions.
                  </li>
                </ul>
                <div class="bold">
                  Education
                </div>
                <ul>
                  <li>
                    Bachelor’s degree in Marketing & sales, or related field.
                  </li>
                  <li>Minimum of 3-5 years of proven experience in sales within the renewable energy sector, with a focus on solar energy solutions.</li>
                  <li>
                    In-depth knowledge of solar technology, including photovoltaic systems, inverters, and mounting structures.
                  </li>
                  <li>Familiarity with various types of solar installations, including rooftop, ground-mounted, and carport systems.</li>
                  <li>Strong communication and interpersonal skills, with the ability to effectively engage with clients and stakeholders at all levels.</li>
                  <li>Excellent negotiation and persuasion abilities, with a track record of closing complex deals and achieving revenue targets.</li>
                </ul>
                <div class="bold">
                  Responsibilities
                </div>

               <ul>
                 <li>Identify and cultivate new business opportunities & New Leads in the solar energy sector, with a specific emphasis on rooftop and ground-mounted installations.</li>
                 <li>Develop New Leads and maintain strong relationships with key stakeholders, including commercial and residential property owners, government agencies, and contractors.</li>
                 <li>Conduct thorough site assessments to determine feasibility and suitability for solar installations, considering factors such as roof orientation, shading, and structural integrity.</li>
                 <li>Collaborate with engineering and design teams to develop customized solar solutions tailored to the specific needs and requirements of clients.</li>
                 <li>Prepare and present compelling proposals and quotations to prospective clients, outlining the benefits and financial returns of solar energy investments.</li>
                 <li>Negotiate contracts and agreements with clients, ensuring favourable terms and conditions for all parties involved.</li>
                 <li>Stay informed about industry trends, market developments, and emerging technologies in solar energy to maintain a competitive edge.</li>
                 <li>Meet or exceed sales targets and KPIs set by the company, demonstrating consistent performance and achievement.</li>
               </ul>
               
                <a class="btn bg-orange px-5" href="mailto:careers@enernew.in?subject=Application for position - Sales Executive">
                  Apply
                </a>

              </div>
            </div>
          </div>
          <div class="accordion-item" data-aos-delay="100">
            <h2 class="accordion-header">
              <button class="accordion-button border-bottom collapsed fw-semibold" type="button"
                data-bs-toggle="collapse" data-bs-target="#accord-2" aria-expanded="false" aria-controls="accord-2">
                Construction Head - Project Execution
              </button>
            </h2>
            <div id="accord-2" class="accordion-collapse collapse" data-bs-parent="#accordion">
              <div class="accordion-body">
                <div class="bold">
                  Job Location
                </div>
                <ul>
                  <li>
                    Pan India
                  </li>
                </ul>
                <div class="bold">
                  Experience
                </div>
                <ul>
                  <li>
                    Minimum of 5-8 years of experience in solar project design and engineering.
                  </li>
                </ul>
                <div class="bold">
                  Education
                </div>
                <ul>
                  <li>
                    Bachelor’s degree in civil engineering or a related field.
                  </li>
                </ul>
                <div class="bold">
                  Responsibilities
                </div>

                <ul>
                  <li>Project Planning and Execution: Ensuring effective planning, scheduling, and execution of
                    engineering, procurement, and construction activities to meet project objectives within the
                    specified timeline and budget.</li>
                  <li>Team Management: Leading and managing a multidisciplinary team of engineers, procurement
                    specialists, construction professionals, and subcontractors to ensure seamless coordination and
                    collaboration throughout the project lifecycle.</li>
                  <li>Stakeholder Management: Establishing and maintaining relationships with clients, contractors,
                    suppliers, and other relevant stakeholders to ensure smooth communication, timely delivery, and
                    customer satisfaction.</li>
                  <li>Quality Assurance and Control: Implementing quality management systems, conducting
                    inspections, and ensuring adherence to technical specifications, standards, and regulatory
                    requirements to deliver projects of the highest quality.</li>
                  <li>Cost Management: Monitoring project costs, tracking expenses, optimizing procurement
                    processes, and identifying cost-saving opportunities while maintaining project profitability.
                  </li>
                  <li>Risk Management: Identifying potential risks and developing mitigation strategies,
                    implementing safety protocols, and ensuring compliance with health, safety, and environmental
                    regulations.</li>
                  <li>Contract Management: Managing contracts with vendors, subcontractors, and suppliers,
                    negotiating terms and conditions, and ensuring contractual compliance throughout the project.
                  </li>
                  <li>Technical Expertise: Demonstrating a strong understanding of engineering principles,
                    construction methodologies, and industry best practices to guide project decision-making and
                    troubleshoot technical issues.</li>
                </ul>
                <button @disabled(true) class="btn bg-orange px-5">
                  Apply
                </button>

              </div>
            </div>
          </div>
          <div class="accordion-item" data-aos-delay="200">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#accord-3" aria-expanded="false" aria-controls="accord-3">
                Quality Head (Solar) Corporate
              </button>
            </h2>
            <div id="accord-3" class="accordion-collapse collapse" data-bs-parent="#accordion">
              <div class="accordion-body">
                <div class="bold">
                  Job Location
                </div>
                <ul>
                  <li>
                    Pan India
                  </li>
                </ul>
                <div class="bold">
                  Experience
                </div>
                <ul>
                  <li>
                    Minimum of 5-8 years of experience in solar project design and engineering.
                  </li>
                </ul>
                <div class="bold">
                  Education
                </div>
                <ul>
                  <li>
                    Bachelor’s degree in civil engineering or a related field.
                  </li>
                </ul>
                <div class="bold">
                  Responsibilities
                </div>

                <ul>
                  <li>Project Planning and Execution: Ensuring effective planning, scheduling, and execution of
                    engineering, procurement, and construction activities to meet project objectives within the
                    specified timeline and budget.</li>
                  <li>Team Management: Leading and managing a multidisciplinary team of engineers, procurement
                    specialists, construction professionals, and subcontractors to ensure seamless coordination and
                    collaboration throughout the project lifecycle.</li>
                  <li>Stakeholder Management: Establishing and maintaining relationships with clients, contractors,
                    suppliers, and other relevant stakeholders to ensure smooth communication, timely delivery, and
                    customer satisfaction.</li>
                  <li>Quality Assurance and Control: Implementing quality management systems, conducting
                    inspections, and ensuring adherence to technical specifications, standards, and regulatory
                    requirements to deliver projects of the highest quality.</li>
                  <li>Cost Management: Monitoring project costs, tracking expenses, optimizing procurement
                    processes, and identifying cost-saving opportunities while maintaining project profitability.
                  </li>
                  <li>Risk Management: Identifying potential risks and developing mitigation strategies,
                    implementing safety protocols, and ensuring compliance with health, safety, and environmental
                    regulations.</li>
                  <li>Contract Management: Managing contracts with vendors, subcontractors, and suppliers,
                    negotiating terms and conditions, and ensuring contractual compliance throughout the project.
                  </li>
                  <li>Technical Expertise: Demonstrating a strong understanding of engineering principles,
                    construction methodologies, and industry best practices to guide project decision-making and
                    troubleshoot technical issues.</li>
                </ul>
                <button @disabled(true) href="#" class="btn bg-orange px-5">
                  Apply
                </button>

              </div>
            </div>
          </div>
          <div class="accordion-item" data-aos-delay="300">
            <h2 class="accordion-header">
              <button class="accordion-button collapsed fw-semibold" type="button" data-bs-toggle="collapse"
                data-bs-target="#accord-4" aria-expanded="false" aria-controls="accord-4">
                Manger - Solar Park development (Land Acquisition)
              </button>
            </h2>
            <div id="accord-4" class="accordion-collapse collapse" data-bs-parent="#accordion">
              <div class="accordion-body">
                <div class="bold">
                  Job Location
                </div>
                <ul>
                  <li>
                    Pan India
                  </li>
                </ul>
                <div class="bold">
                  Experience
                </div>
                <ul>
                  <li>
                    Minimum of 5-8 years of experience in solar project design and engineering.
                  </li>
                </ul>
                <div class="bold">
                  Education
                </div>
                <ul>
                  <li>
                    Bachelor’s degree in civil engineering or a related field.
                  </li>
                </ul>
                <div class="bold">
                  Responsibilities
                </div>

                <ul>
                  <li>Project Planning and Execution: Ensuring effective planning, scheduling, and execution of
                    engineering, procurement, and construction activities to meet project objectives within the
                    specified timeline and budget.</li>
                  <li>Team Management: Leading and managing a multidisciplinary team of engineers, procurement
                    specialists, construction professionals, and subcontractors to ensure seamless coordination and
                    collaboration throughout the project lifecycle.</li>
                  <li>Stakeholder Management: Establishing and maintaining relationships with clients, contractors,
                    suppliers, and other relevant stakeholders to ensure smooth communication, timely delivery, and
                    customer satisfaction.</li>
                  <li>Quality Assurance and Control: Implementing quality management systems, conducting
                    inspections, and ensuring adherence to technical specifications, standards, and regulatory
                    requirements to deliver projects of the highest quality.</li>
                  <li>Cost Management: Monitoring project costs, tracking expenses, optimizing procurement
                    processes, and identifying cost-saving opportunities while maintaining project profitability.
                  </li>
                  <li>Risk Management: Identifying potential risks and developing mitigation strategies,
                    implementing safety protocols, and ensuring compliance with health, safety, and environmental
                    regulations.</li>
                  <li>Contract Management: Managing contracts with vendors, subcontractors, and suppliers,
                    negotiating terms and conditions, and ensuring contractual compliance throughout the project.
                  </li>
                  <li>Technical Expertise: Demonstrating a strong understanding of engineering principles,
                    construction methodologies, and industry best practices to guide project decision-making and
                    troubleshoot technical issues.</li>
                </ul>
                <button @disabled(true) class="btn bg-orange px-5">
                  Apply
                </button>

              </div>
            </div>
          </div>
          <!-- End -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

