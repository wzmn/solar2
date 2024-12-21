<?php 

//var_dump($jobs);

?>

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
          @if (count($jobs)>0)
            @foreach ($jobs as $job)
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button fw-semibold {{ $loop->first ? '' : 'collapsed'}}" type="button" data-bs-toggle="collapse"
                    data-bs-target="#accord-{{$loop->index}}" aria-expanded="{{ $loop->first ? 'true' : 'false'}}" aria-controls="accord-{{$loop->index}}">
                    {{$job->title}}
                  </button>
                </h2>
                <div id="accord-{{$loop->index}}" class="accordion-collapse collapse {{ $loop->first ? 'show' : ''}}" data-bs-parent="#accordion">
                  <div class="accordion-body">
                    {!! $job->description !!}
                    <div>
                      <a class="btn bg-orange px-5 {{!$job->apply_link ? 'disabled' : ''}}" href="{{$job->apply_link}}">
                        Apply
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            @endforeach
          @else
              <h4>There are no Jobs to display</h4>
          @endif
          {{-- <div class="accordion-item" data-aos-delay="100">
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
          </div> --}}
          <!-- End -->
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

