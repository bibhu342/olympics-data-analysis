```markdown
# 🏅 Olympics Data Analysis

A reproducible exploratory data analysis of 120+ years of Olympic history, focused on medal trends, country and sport performance, gender participation, and athlete age demographics.

[![Notebook](https://img.shields.io/badge/notebook-Jupyter-orange)]()
[![Python](https://img.shields.io/badge/python-3.8%2B-blue)]()
[![License: MIT](https://img.shields.io/badge/license-MIT-green)]()

Table of Contents
- Overview
- Key Insights
- Repository Structure
- Quick Start
- Reproducing the Analysis
- Notebook: olympics_capstone.ipynb
- Example Usage
- Visualizations
- Contributing
- License
- Author & Contact

Overview
--------
This project analyzes the Kaggle "athlete_events.csv" dataset (1896–2016) to surface trends and patterns across Olympic Games history. Analysis is done using Python (Pandas, Matplotlib, Seaborn) within a Jupyter Notebook and stored results can be reproduced using SQLite if desired.

Key Insights (high level)
-------------------------
- Total medal counts generally increase over time with noticeable dips during world wars.
- A small set of countries (e.g., USA) consistently rank high in medal counts.
- Female participation has increased substantially since the 1980s.
- Athlete performance (medal-winning ages) clusters around the mid-20s for many sports, with sport-specific variation.

Repository Structure
--------------------
olympics-data-analysis
- olympics_capstone.ipynb — Jupyter Notebook with the full exploratory analysis, figures, and commentary
- athlete_events.csv — Dataset used for the analysis (optional; available from Kaggle)
- README.md — Project overview and instructions (this file)
- .gitignore — Recommended to ignore .ipynb_checkpoints, .env, __pycache__, etc.
- requirements.txt — (optional) list of Python dependencies

Quick Start
-----------
1. Clone the repository
   ```bash
   git clone https://github.com/bibhu342/olympics-data-analysis.git
   cd olympics-data-analysis
   ```

2. (Recommended) Create a virtual environment and install dependencies
   ```bash
   python -m venv .venv
   source .venv/bin/activate   # macOS / Linux
   .venv\Scripts\activate      # Windows (PowerShell)
   pip install --upgrade pip
   pip install pandas matplotlib seaborn jupyterlab
   ```
   Optionally, create a requirements.txt and install with:
   ```bash
   pip freeze > requirements.txt
   pip install -r requirements.txt
   ```

3. Download dataset (see Reproducing the Analysis) and place `athlete_events.csv` in the repo root.

4. Open the notebook
   ```bash
   jupyter notebook olympics_capstone.ipynb
   ```
   or
   ```bash
   jupyter lab
   ```

Reproducing the Analysis
------------------------
Dataset
- The notebook uses the Kaggle dataset "athlete_events.csv" (https://www.kaggle.com/datasets/heesoo37/120-years-of-olympic-history-athletes-and-results).
- After downloading, place `athlete_events.csv` into the repository root.

Data loading (example)
```python
import pandas as pd

df = pd.read_csv("athlete_events.csv")
df.shape  # (rows, columns)
df.head()
```

If you prefer to persist processed tables:
- A small SQLite example is included in the notebook; run the cell that creates `olympics.db` to cache processed tables for faster iterative work.

Notebook: olympics_capstone.ipynb
--------------------------------
What you'll find in the notebook:
- Data cleaning and enrichment (e.g., standardizing country names, medal flags)
- Time-series analysis of medals and participant counts
- Top countries overall and per sport
- Gender participation growth over time
- Age distribution and peak-performance analysis by sport and event
- Publication-quality visualizations with Matplotlib/Seaborn and export-ready figures

Example Analysis Snippets
-------------------------
Top countries by total medals:
```python
medals = df[df['Medal'].notna()]
top_countries = medals.groupby('Team')['Medal'].count().sort_values(ascending=False).head(10)
print(top_countries)
```

Gender participation trend:
```python
participation = df.drop_duplicates(subset=['Year','ID'])
gender_counts = participation.groupby(['Year','Sex']).size().unstack(fill_value=0)
gender_counts.plot(kind='line')
```

Visualizations
--------------
Notable figures included in the notebook:
- Medal trend over time (global)
- Medal share by country and sport (stacked/area charts)
- Gender participation growth (line charts)
- Age distribution (violin plots / histograms)
- Sport-specific peak-age scatter plots

Contributing
------------
Thank you for considering contributing! Small, focused contributions are welcome:
- Open an issue for discussion before implementing larger changes.
- For fixes or improvements (README, notebook comments, visualization polish), open a pull request.
- Suggested labels: enhancement, bug, docs.
- If you'd like help adding tests, packaging, or CI, open an issue describing what you want to accomplish and I’ll help prioritize.

Suggested Contribution Workflow
1. Fork the repo
2. Create a branch: git checkout -b fix/describe-change
3. Make changes and add clear commit messages
4. Push and open a PR with a short description of what changed and why

License
-------
This repository is provided under the MIT License. See LICENSE for details (or add a LICENSE file if missing).

Acknowledgements
----------------
- Dataset: "120 years of Olympic history: athletes and results" — Kaggle
- Inspirations and visual styles from common data visualization best practices

Author & Contact
----------------
Bibhudendu Behera — Bangalore, India  
LinkedIn: https://www.linkedin.com/in/bibhudendu-behera-b5375b5b/
```
