# This script is designed to be run in a single code cell in a Jupyter Notebook.
# It uses Pandas and the IPython.display module to render the professional Markdown
# content of your Strategic Data Blueprint as clean HTML for easy PDF export.

import pandas as pd
from IPython.display import display, HTML

# ----------------------------------------------------------------------
# 1. Proposal Content (Formatted from final_project_proposal.md)
# This includes all headings, text, and data tables.
# ----------------------------------------------------------------------

# NOTE: The tables are extracted and stored as Pandas DataFrames for clean HTML rendering.

PROPOSAL_TEXT = """
<div style="font-family: 'Inter', sans-serif; max-width: 900px; margin: 0 auto; padding: 20px; color: #1f2937;">

    <header style="border-bottom: 3px solid #6b7280; padding-bottom: 10px; margin-bottom: 20px;">
        <h1 style="font-size: 2.5em; font-weight: 700; color: #111827;">Strategic Data Blueprint: Olympic Trends (1896-2016)</h1>
        <p style="font-size: 1.1em; color: #4b5563;">A Comprehensive Proposal for Data-Driven Olympic Strategy</p>
    </header>

    <section style="margin-bottom: 30px;">
        <h2 style="font-size: 1.6em; font-weight: 600; color: #1f2937; border-left: 4px solid #3b82f6; padding-left: 10px;">EXECUTIVE SUMMARY</h2>
        <p style="margin-top: 10px; line-height: 1.6;">
            This project provides evidence-based analysis of 120 years of Olympic history. The core objective is to identify **actionable trends** in medal dominance, participation evolution, and athlete demographics to guide investment decisions for sports federations, broadcasters, and sponsors. We will validate key hypotheses and deliver a final report focused on strategic resource allocation and policy adjustments for future Olympic success.
        </p>
    </section>

    <section style="margin-bottom: 30px;">
        <h2 style="font-size: 1.6em; font-weight: 600; color: #1f2937; border-left: 4px solid #3b82f6; padding-left: 10px;">STEP 1: TECHNICAL PREPARATION & DOCUMENTATION</h2>
        <h3 style="font-size: 1.2em; font-weight: 600; color: #4b5563; margin-top: 15px;">1.1 Client, Dataset, and Rationale</h3>
        <ul style="list-style-type: none; padding-left: 0; margin-top: 5px;">
            <li><strong>Client:</strong> Global Sports Analytics Firm (Advising Olympic Committees/Sponsors).</li>
            <li><strong>Dataset:</strong> Historical Olympic dataset (athlete_events.csv) covering 271,116 entries (1896-2016).</li>
            <li><strong>Rationale:</strong> Provides rich longitudinal data necessary for performance, demographic, and long-term trend analysis, making it highly relevant for strategic decision-making.</li>
        </ul>

        <h3 style="font-size: 1.2em; font-weight: 600; color: #4b5563; margin-top: 15px;">1.2 Data Cleaning and Preprocessing</h3>
        <p style="margin-top: 5px; line-height: 1.6;">
            The initial dataset required targeted cleaning for analytical integrity. The primary steps included assessing missing values in critical fields like <strong>Age</strong>, **Height**, **Weight**, and **Medal**. Missing <strong>Age</strong> values were imputed using the **median age (24 years)** to preserve the distribution's shape. The **Medal** column was converted into a binary flag (1 for Medal, 0 for No Medal) to facilitate aggregation and performance comparison.
        </p>

        <h3 style="font-size: 1.2em; font-weight: 600; color: #4b5563; margin-top: 15px;">1.3 Initial Data Exploration (Key Statistics)</h3>
        <p style="margin-top: 5px;">
            Initial exploration confirmed data robustness and guided hypothesis formation by highlighting major imbalances:
        </p>
        <!-- DataFrame 1 will be inserted here -->

        <h3 style="font-size: 1.2em; font-weight: 600; color: #4b5563; margin-top: 15px;">1.4 Proposed Entity Relationship Diagram (ERD)</h3>
        <p style="margin-top: 5px; line-height: 1.6;">
            The data is conceptually structured around a central **PARTICIPATION** fact table, linking key dimensions: <strong>ATHLETE</strong>, **GAME**, **COUNTRY**, and **EVENT**. This structure enables aggregated analysis across time and demographics.
        </p>
        <pre style="background-color: #f1f5f9; padding: 10px; border-radius: 5px; overflow-x: auto; color: #1e293b;">
erDiagram
    ATHLETE ||--o{ PARTICIPATION : competes_in
    GAME ||--o{ PARTICIPATION : held_at
    COUNTRY ||--o{ PARTICIPATION : represents
    EVENT ||--o{ PARTICIPATION : is_part_of
        </pre>
    </section>

    <section style="margin-bottom: 30px;">
        <h2 style="font-size: 1.6em; font-weight: 600; color: #1f2937; border-left: 4px solid #3b82f6; padding-left: 10px;">STEP 2: DEVELOPING THE PROJECT PROPOSAL</h2>

        <h3 style="font-size: 1.2em; font-weight: 600; color: #4b5563; margin-top: 15px;">2.1 Key Analytical Questions</h3>
        <ul style="margin-top: 5px; list-style-type: disc; padding-left: 20px;">
            <li>How has medal distribution evolved over time across different sports, countries, and Olympic editions?</li>
            <li>What is the historical rate of change in female athlete participation, and how has the gender gap closed since the mid-20th century?</li>
            <li>What is the concentrated age range for peak performance, and how does the age distribution of medalists differ from that of all competing athletes?</li>
        </ul>

        <h3 style="font-size: 1.2em; font-weight: 600; color: #4b5563; margin-top: 15px;">2.2 Core Hypotheses (Assumptions to Prove/Disprove)</h3>
        <ul style="margin-top: 5px; list-style-type: disc; padding-left: 20px;">
            <li>**H1 (Sport Dominance):** Athletics and Swimming dominate overall medal counts because of their high volume of events.</li>
            <li>**H2 (Gender Trend):** Female participation shows steep, non-linear growth post-1970s, making it the most significant social trend in the modern Games.</li>
            <li>**H3 (Age Focus):** Medalists fall into a significantly narrower age distribution (20-30 years old) than the general athlete population.</li>
            <li>**H4 (National Stability):** Countries with a long Olympic history (e.g., USA) maintain consistent medal dominance across eras.</li>
        </ul>

        <h3 style="font-size: 1.2em; font-weight: 600; color: #4b5563; margin-top: 15px;">2.3 Analytical Approach (Methodology)</h3>
        <p style="margin-top: 5px; line-height: 1.6;">
            The approach will be iterative, focusing first on feature aggregation (Year x Sex, Year x NOC, Year x Sport). We will use time-series analysis for participation and comparative visualization (KDEs, Boxplots) for age demographics. The primary metric will be **Medal Count** (aggregate and stratified by G/S/B), and we will use the **rate of change** to measure the success of participation trends. Validation will be achieved by testing the statistical significance of differences between the medalist and non-medalist populations.
        </p>
    </section>

    <footer style="margin-top: 30px; padding-top: 10px; border-top: 1px dashed #d1d5db; text-align: right; font-size: 0.9em; color: #6b7280;">
        <p>Prepared for Management | Date: 18 October 2025</p>
    </footer>
</div>
"""

# ----------------------------------------------------------------------
# 2. DataFrames for clean rendering
# ----------------------------------------------------------------------

# DataFrame 1: Key Statistics
data_stats = {
    'Feature': ['Total Entries Analyzed', 'Overall Gender Split (M:F)', 'Median Athlete Age (Imputed)', 'Top 3 Medal Sports', 'Top Country (NOC)'],
    'Statistic': ['271,116', '≈ 73% Male / 27% Female', '24 Years', 'Athletics, Swimming, Rowing', 'USA (5637 Medals)'],
    'Analytical Insight': ['Robust dataset for longitudinal trend analysis.', 'Confirms historical male dominance; requires focus on gender parity rate.', 'Establishes central tendency; guides peak performance age analysis.', 'High-event sports are the primary drivers of medal totals.', 'Confirms national stability; justifies time-series analysis of medal consistency.']
}
df_stats = pd.DataFrame(data_stats)


# ----------------------------------------------------------------------
# 3. HTML Generation and Insertion
# ----------------------------------------------------------------------

# Render the stats DataFrame as a styled HTML table
stats_html = df_stats.to_html(
    index=False,
    classes='table table-striped',
    border=0
)

# Insert the HTML table into the main proposal text
proposal_html_output = PROPOSAL_TEXT.replace(
    '<!-- DataFrame 1 will be inserted here -->',
    f'<div style="margin-top: 10px;">{stats_html}</div>'
)

# Print the final HTML output (this is what you see in the cell output)
display(HTML(proposal_html_output))
