# 🏅 Olympic Performance Analysis — Data Storytelling Project
*By Bibhudendu Behera | Data Analyst & AI Engineer Aspirant*

---

## 📖 Overview
This project analyzes over 120 years of Olympic Games data (1896–2016) to uncover **patterns in athlete performance, country dominance, and gender participation**.  
Through **descriptive statistics**, **correlation**, and **predictive modeling**, it identifies key performance drivers and introduces new performance metrics — transforming raw data into actionable insights for sports management and policy.

---

## 🎯 Objectives
- Understand historical trends in medals, sports, and gender inclusion  
- Discover correlations between athlete attributes and medal outcomes  
- Develop new KPIs to measure country-level and sport-level efficiency  
- Tell a compelling data story supported by visuals and analytics  

---

## 📂 Dataset
**Files Used:**
- `athlete_events.csv` — athlete-level performance and demographics  
- `noc_regions.csv` — country code mappings  

**Data Summary:**
- **Rows:** 271,116 | **Columns:** 15  
- **Years Covered:** 1896–2016  
- **Features:** Name, Sex, Age, Height, Weight, Team, Sport, Event, Medal  

---

## 🧮 Methodology
| Phase | Focus | Key Tools |
|-------|--------|-----------|
| **Milestone 1** | Project proposal & hypothesis definition | Markdown, Research |
| **Milestone 2** | Descriptive statistics & visual insights | Pandas, Matplotlib, Seaborn |
| **Milestone 3** | Correlation, regression & new metrics | Numpy, Statsmodels, Scikit-learn |
| **Milestone 4** | Storytelling & executive presentation | Jupyter, Markdown, PowerPoint |

---

## 📊 Exploratory Insights (Milestone 2)
**1. Medal Distribution**
- Athletics and Swimming dominate with ~40% of total medals.
- USA, USSR/Russia, Germany, and China top the medal tables.

**2. Gender Participation**
- Female participation rose sharply post-1980, from 25% to 45%.  
- Equal representation projected by 2032.

**3. Country Dominance**
- Developed nations sustain consistent medal growth.
- Emerging countries show participation rise, but low medal conversion.

---

## 🔍 Beyond Descriptive Stats (Milestone 3)

### **A. Key Correlations**
| Variables | Correlation (r) | Interpretation |
|------------|----------------|----------------|
| Height ↔ Medal | +0.27 | Taller athletes perform better in strength sports |
| Weight ↔ Medal | +0.22 | Moderate positive link with medal success |
| Age ↔ Medal | -0.12 | Younger athletes excel in agility-based sports |
| GDP per capita ↔ Medal Efficiency | +0.35 | Wealthier nations convert training into results |

### **B. Regression Summary**
- **Model:** Logistic Regression (Medal ~ Age + Height + Weight)  
- **Result:** Height and Weight are significant positive predictors (p < 0.05).  
- **Insight:** Physical advantage varies strongly by sport category.

---

## 🧩 Custom Metrics Developed

| Metric | Formula | Purpose |
|---------|----------|----------|
| **Medal Efficiency Index (MEI)** | Total Medals / Total Athletes | Measures how effectively a country converts participation into medals |
| **Age Performance Index (API)** | Avg Medalist Age / Avg Athlete Age | Identifies whether sports favor younger or older athletes |

**Example Results**
| Country | MEI | API |
|----------|-----|-----|
| USA | 0.42 | 0.95 |
| China | 0.38 | 1.02 |
| India | 0.06 | 0.89 |

---

## 📈 Visual Highlights
- Medal counts by country (bar chart)
- Gender participation trend (line plot)
- Correlation heatmap of athlete traits
- Scatter: Height vs. Medal Probability
- MEI Comparison by Country (bar chart)

---

## 💡 Insights Summary
1. **Height and weight** predict medal probability in power sports.  
2. **Younger athletes** dominate high-speed categories (gymnastics, sprinting).  
3. **Economic development** correlates with medal conversion efficiency.  
4. **Female inclusion** improved drastically post-1980.  

---

## 🧭 Recommendations
- Encourage **gender equity programs** in underrepresented sports.  
- Support **emerging nations** with athlete training infrastructure.  
- Integrate **data-driven performance tracking** in national Olympic committees.  
- Extend analysis to **2020–2024 Olympics** for post-pandemic comparison.

---

## 🧰 Tools & Technologies
**Languages & Libraries:** Python, Pandas, NumPy, Matplotlib, Seaborn, Statsmodels  
**Environment:** Jupyter Notebook  
**Version Control:** Git & GitHub  
**Visualization Tools:** Power BI / Tableau (optional)

---

## 👨‍💻 Author
**Bibhudendu Behera**  
AI Engineer Aspirant | Data Analyst | Python & SQL Specialist  
📍 Bangalore, India  
🔗 [LinkedIn](https://www.linkedin.com/in/bibhudendu-behera-b5375b5b)  
🌐 [GitHub]([https://github.com/][(https://github.com/bibhu342/olympics-data-analysis/tree/main))]

---

## 📚 License
This project is shared under the MIT License for educational purposes.


