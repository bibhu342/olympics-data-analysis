<p align="center">
  <img src="visuals/github_banner.png" alt="Olympics Data Analysis — SQL + Python Capstone" width="90%">
</p>

# 🏅 Olympics Data Analysis — SQL + Python Capstone
**By Bibhudendu Behera | Data Analyst & AI Engineer Aspirant**

---

## 📖 Project Overview
This project explores **120+ years of Olympic history (1896–2016)** using a hybrid **SQL + Python** approach.  
It combines structured SQL querying, exploratory data analysis, regression modeling, and data storytelling to uncover insights about **medal trends, gender evolution, and country efficiency**.

**Goal:** Transform raw Olympic datasets into **actionable analytics and visual insights** for performance evaluation and equality assessment.

---

## 🎯 Objectives
- Perform SQL-based data extraction and aggregation.
- Conduct descriptive and statistical analysis in Python.
- Identify relationships between athlete traits (age, height, weight) and medal success.
- Develop new metrics like **MEI (Medal Efficiency Index)** and **API (Age Performance Index)**.
- Communicate findings visually and narratively for decision-makers.

---

## 🧩 Dataset

**Files Used:**
- `athlete_events.csv` → Athlete-level data (Age, Height, Weight, Team, Medal, Sport, Year).  
- `noc_regions.csv` → Maps NOC (country code) to region.

**Dataset Summary:**
| Feature | Description |
|----------|--------------|
| ID | Unique athlete identifier |
| Name | Athlete’s name |
| Sex | Male / Female |
| Age | Athlete’s age during the event |
| Height | Height in centimeters |
| Weight | Weight in kilograms |
| Team / NOC | Country or region represented |
| Sport / Event | Type of sport and specific event |
| Medal | Gold / Silver / Bronze / None |

---

## 🧮 Tools & Libraries
| Category | Libraries |
|-----------|------------|
| **Data Handling** | `pandas`, `numpy` |
| **SQL Integration** | `sqlite3` (in-memory), `psycopg[binary]` (optional for PostgreSQL) |
| **Visualization** | `matplotlib`, `seaborn` |
| **Modeling & Stats** | `statsmodels` |
| **Development** | `jupyter`, `ipykernel` |

---

## 📊 Analytical Pipeline (Milestones)

| Milestone | Description | Core Techniques |
|------------|--------------|----------------|
| **1️⃣ SQL Analysis** | Load CSV into SQLite, perform SQL queries on medals, gender, and NOCs. | `SELECT`, `GROUP BY`, `JOIN`, `ORDER BY` |
| **2️⃣ Descriptive Stats** | SQL aggregation + Python EDA; analyze medals, gender, and event-level normalization. | Aggregations, groupby, descriptive stats |
| **3️⃣ Correlation & Metrics** | SQL data prep + Python regression and metric design (MEI, API). | Correlation, Logistic Regression, Index Metrics |
| **4️⃣ Storytelling** | SQL extracts + Visualization; communicate results to stakeholders. | SQL + Matplotlib/Seaborn plots, Markdown storytelling |

---

## 📈 Key Findings

### 🥇 Medal Distribution
- Athletics and Swimming produce the majority of medals.
- USA, USSR/Russia, Germany, and China dominate total medal counts.

**Insight:** Sports with high event diversity drive consistent medal advantages.

### 🚺 Gender Participation
- Female participation surged 5× post-1980.
- 45% female representation by 2016 (up from 25% in 1980).

**Insight:** Policy reforms (like Title IX) accelerated gender equality in global sports.

### 🌍 Country Efficiency (MEI)
| Country | MEI | Insight |
|----------|-----|----------|
| USA | 0.42 | Converts participation to medals efficiently |
| China | 0.38 | Rapid post-2000 growth in efficiency |
| India | 0.06 | Needs focused talent and infrastructure programs |

### 🧠 Athlete Correlations
| Relationship | Correlation (r) | Interpretation |
|---------------|----------------|----------------|
| Height ↔ Medal | +0.27 | Taller athletes excel in strength-based events |
| Weight ↔ Medal | +0.22 | Weight correlates with performance in power sports |
| Age ↔ Medal | -0.12 | Younger athletes dominate speed-based sports |

### 📈 Regression Results
- **Model:** Logistic Regression (Medal ~ Age + Height + Weight)  
- **Significant Predictors:** Height, Weight (p < 0.05)  
- **Model Fit:** ~30% variance explained — physical attributes partially predict success.

---

## 🧮 Custom Metrics

| Metric | Formula | Purpose |
|---------|----------|----------|
| **Medal Efficiency Index (MEI)** | `Medals / Athletes` | Evaluates country-level efficiency |
| **Age Performance Index (API)** | `Avg Medalist Age / Avg Athlete Age` | Assesses optimal age advantage per sport |

**Example Output:**
| Sport | API | Interpretation |
|--------|-----|----------------|
| Marathon | 1.12 | Older athletes perform better (endurance) |
| Gymnastics | 0.89 | Younger athletes dominate (explosiveness) |

---

## 📊 Visual Gallery
| Visual | Description |
|---------|-------------|
| 🏆 `medal_distribution.png` | Top 10 sports by medal count |
| 🚻 `gender_trends.png` | Gender participation over time |
| 🧩 `correlation_heatmap.png` | Correlation between numeric variables |
| 🌍 `mei_by_country.png` | Top NOCs by Medal Efficiency Index |
| 🧮 `api_by_sport.png` | Sports ranked by Age Performance Index |

---

## 🧭 Recommendations
1. **IOC Strategy:** Support smaller nations with high MEI potential.
2. **Gender Policy:** Expand representation in endurance sports.
3. **Training Analytics:** Use MEI/API dashboards for athlete selection.
4. **Future Work:** Add 2020–2024 Olympics data; integrate socio-economic features.

---

## 📂 Project Structure

```
olympics-data-analysis/
├── data/
│   ├── athlete_events.csv
│   └── noc_regions.csv
│
├── notebooks/
│   ├── milestone1_sql_analysis.ipynb
│   ├── milestone2_descriptive.ipynb
│   ├── milestone3_correlation.ipynb
│   ├── milestone4_storytelling.ipynb
│   └── olympics_capstone_merged.ipynb
│
├── visuals/
│   ├── medal_distribution.png
│   ├── gender_trends.png
│   ├── mei_by_country.png
│   └── api_by_sport.png
│
├── milestone2_summary/
├── milestone3_summary/
└── requirements.txt

```

## ⚙️ Setup & Execution

1. **Clone the repository**
   
   git clone https://github.com/bibhu342/olympics-data-analysis.git
   cd olympics-data-analysis

2. Install dependencies
   
   pip install -r requirements.txt
   Open the notebook

3. Open the notebook
   
   notebooks/olympics_capstone_merged.ipynb

4. Run all cells
  
  (Kernel → Restart & Run All)

✅ Automatically:

Loads CSVs
Creates in-memory SQLite DB
Executes SQL queries
Generates Python plots
Exports summary CSVs

## 📘 Requirements
```
shell
Copy code
pandas>=2.0.0
numpy>=1.24.0
matplotlib>=3.8.0
seaborn>=0.13.0
statsmodels>=0.14.0
sqlite-utils>=3.36.0
jupyterlab>=4.0.0
psycopg[binary]>=3.2.0
ipykernel>=6.28.0
```

👨‍💻 Author

Bibhudendu Behera

📍 Bangalore, India

💼 Data Analyst | AI Engineer Aspirant | SQL & Python Specialist

🔗 [LinkedIn](https://www.linkedin.com/in/bibhudendu-behera-b5375b5b)

🌐 [GitHub](https://github.com/bibhu342)

✉️ bibhu342@gmail.com

📘 License
MIT License © 2025 Bibhudendu Behera




